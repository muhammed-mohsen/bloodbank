<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Post;
use App\Governorate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function governorates()
    {
        $governorates = Governorate::all();
        return responsejson(1, 'success', $governorates);
    }
    public function posts(Request $request)
    {

        $posts = Post::where(function ($query) use ($request) {

            if ($request->has('category_id')) {
                $query->where('category_id', $request->category_id);
            }
        })->get();



        return responsejson(1, 'success', $posts);
    }

    public function filter1()
    {
        $category = Category::all();

        foreach ($category as $cat) {

            $collection = array('cat');
        }

        $filtered =  $collection->filter(function ($value, $key) {
            return $value == 'التبرع بالدم ينقذ حياة';
        });

        dd($filtered->all());
    }
    protected function filterposts(Request $request, $query, Post $filters)
    {
        $posts = request->title;

        if ($title = $filters->get('title')) {
            $query->where('posts.title', 'like', "{$title}%");
        }

        // if ($authors = $filters->get('authors')) {
        //     $query->whereIn('posts.user_id', $authors);
        // }
        return responsejson(1, 'success', $title);
    }
    public function cities(Request $request)
    {
        $city = City::where(function ($query) use ($request) {

            if ($request->has('governorate_id')) {
                $query->where('governorate_id', $request->governorate_id);
            }
        })->get();

        return responsejson(1, 'success', $city);
    }

    // public function categorypsots(Request $request)
    // {
    //     $posts = Post::where('category_id', $request->category_id)->paginate(10);

    //     return responsejson(1, 'success', $posts);
    // }

    // public function cities()
    // {
    //     $cities = City::all();

    //     return responsejson(1, 'success', $cities);
    // }
}
