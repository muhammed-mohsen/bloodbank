<?php

namespace App\Http\Controllers\Api;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthController extends Authenticatable
{
    public function register(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'name' => 'required',
            'city_id' => 'required',
            'phone' => 'required',
            'ld_donation' => 'required',
            'blood_type' => 'required|in:O-,O+,B-,B+,A-,A+,Ab-,AB+',
            'password' => 'required|confirmed',
            'email' => 'required|unique:clients',

        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }

        $request->merge(['password' => bcrypt($request->password)]);
        $client = Client::create($request->all());
        $client->api_token = str_random(60);
        $client->save();

        return responsejson(
            1,
            'تم الاضافة بنجاح',
            [
                'api_token' => $client->api_token,
                'client' => $client,

            ]
        );
    }
    public function login(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'password' => 'required',
            'phone' => 'required',




        ]);
        if ($validator->fails()) {
            return responsejson(0, $validator->errors()->first(), $validator->errors());
        }

        $client = Client::where('phone', $request->phone)->first();
        //return auth()->guard('api')->validate($request->all());

        if ($client) {



            if (Hash::check($request->password, $client->password)) {
                return responsejson(
                    1,
                    'تم التسجيل الدخول',
                    [
                        'api_token' => $client->api_token,
                        'client' => $client,

                    ]
                );
            } else {

                return responsejson('0', ' تسجيل الدخول غير صحيح');
            }
        } else {

            return responsejson('0', ' تسجيل الدخول غير صحيح');
        }
        //     1,
        // responsejson(
        //     'تم الاضافة بنجاح',
        //     [
        //         'api_token' => $client->api_token,
        //         'client' => $client,cr

        //     ]
        // );
    }
}
