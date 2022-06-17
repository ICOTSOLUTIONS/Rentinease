<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('admin.pages.blog.blog',['blogs'=>$blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blog.blogadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'header' => 'required',
            'image' => 'required|file',
            'text' => 'required',
        ];
        $customMessage = [
            'title.required' => 'The Title field is required', 
            'header.required' => 'The Header field is required', 
            'image.required' => 'The Image field is required', 
            'text.required' => 'The Text field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $blog = new Blog();
        $blog->user_id = auth()->user()->id; 
        $blog->title = $request->title; 
        $blog->header = $request->header;
        $blog->text = $request->text;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('blog/image', $fileName,'public');
            $blog->image = 'image/'.$fileName;
        }
        if($blog->save()){
                session()->flash('message', 'Successfully Blog Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('blog.index');
        }else{
            session()->flash('message', 'Blog not added');
            session()->flash('messageType', 'danger');
            return redirect()->route('blog.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::where('id',$id)->first();
        return view('admin.pages.blog.blogedit',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required',
            'header' => 'required',
            'image' => 'required|file',
            'text' => 'required',
        ];
        $customMessage = [
            'title.required' => 'The Title field is required', 
            'header.required' => 'The Header field is required', 
            'image.required' => 'The Image field is required', 
            'text.required' => 'The Text field is required', 
        ];
        $validate = Validator::make($request->all(),$rules,$customMessage);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $blog = Blog::where('id',$id)->first();
        $blog->user_id = auth()->user()->id; 
        $blog->title = $request->title; 
        $blog->header = $request->header;
        $blog->text = $request->text;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = 'IMG-'.time().'-'.rand().'-'.$file->getClientOriginalExtension();
            $file->storeAs('blog/image', $fileName,'public');
            $blog->image = 'image/'.$fileName;
        }
        if($blog->save()){
                session()->flash('message', 'Successfully Blog Added!');
                session()->flash('messageType', 'success');
                return redirect()->route('blog.index');
        }else{
            session()->flash('message', 'Blog not added');
            session()->flash('messageType', 'danger');
            return redirect()->route('blog.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::where('id',$id)->first();
        if(!empty($blog)){
            if($blog->delete()){
                session()->flash('message', 'Successfully Blog Deleted!');
                session()->flash('messageType', 'danger');
                return redirect()->route('blog.index');
            }
        }else{
            session()->flash('message', 'Blog not Deleted!');
            session()->flash('messageType', 'danger');
            return redirect()->route('blog.index');
        }        
    }
}
