<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;

class WebController extends Controller
{
    public function blog()
    {
        $blogs = Blog::with('user')->get();
        // dd($blogs);
        return view('client.pages.blog.blog',['blogs'=>$blogs??[]]);
    }

    public function blog_details($id)
    {
        $blog = Blog::with('user')->where('id',$id)->first();
        return view('client.pages.blog.blogmore',['blog'=>$blog??[]]);
    }
    public function findagent()
    {
        $users = User::where('role_id',4)->where('agency_id',null)->get();
        dd($users);
        return view('client.pages.findagent.findagent',['users'=>$users??[]]);
    }
}
