<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Posting;
use App\Models\User;

class WebController extends Controller
{
    public function blog()
    {
        $blogs = Blog::with('user')->get();
        // dd($blogs);
        return view('client.pages.blog.blog', ['blogs' => $blogs ?? []]);
    }

    public function blog_details($id)
    {
        $blog = Blog::with('user')->where('id', $id)->first();
        return view('client.pages.blog.blogmore', ['blog' => $blog ?? []]);
    }

    public function findagent()
    {
        $agents = User::where('role_id', 4)->where('agency_id', null)->get();
        $agencies = User::where('role_id', 7)->get();
        // dd($agencies);
        return view('client.pages.findagent.findagent', ['agents' => $agents ?? [], 'agencies' => $agencies ?? []]);
    }

    public function agentproperty($id)
    {
        if (!empty($id)) {
            $agent = User::with('postings')->where('role_id', 4)->where('id', $id)->first();
            return view('client.pages.findagent.agentproperty', ['agent' => $agent ?? []]);
        }
    }

    public function findagency($id)
    {
        $agency = User::where('id', $id)->first();
        $agents = User::where('role_id', 4)->where('agency_id', $id)->get();
        $properties = Posting::with(['photos', 'floorPlans', 'threeSixties', 'videos', 'purpose', 'propertyType.placeType', 'listning_type'])->whereHas('user', function ($query) use ($id) {
            $query->where('agency_id', $id);
        })->get();
        return view('client.pages.findagency.agencyproperty', ['agents' => $agents ?? [], 'agency' => $agency ?? [], 'properties' => $properties ?? []]);
    }
}
