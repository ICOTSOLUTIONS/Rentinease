<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;

class WebController extends Controller
{
    public function blog()
    {
        $blogs = Blog::all();
        return view('client.pages.blog.blog',['blogs'=>$blogs??[]]);
    }

    public function findagent()
    {
        $users = User::where('role_id',4)->where('agency_id',null)->get();
        dd($users);
        return view('client.pages.findagent.findagent',['users'=>$users??[]]);
    }
}
