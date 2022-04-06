<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::all();
        // return view('Blogs.index', compact('blogs'));
        return view('Blogs.index')->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $blog = new Blog();
        $blog->tittle = $request->input('title');
        $blog->description = $request->input('description');
        $blog->image = $request->input('image');
        $blog->user_id = Auth::id();
        $blog->save();

        return redirect()->route('blogs.show', $blog->id);
        

    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blog = Blog::find($id);
        $author =$blog->author;

        return view('Blogs.show',['blog'=> $blog, 'is_author'=>$author->id ===Auth::id()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = Blog::find($id);
        return view('Blogs.edit', ['blog' => $blog]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);        
        $blog->tittle = $request->input('title');
        $blog->description = $request->input('description');
        $blog->image = $request->input('image');
        $blog->save();

        return redirect()->route('blogs.show', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        // $blog = Blog::find($id);
        // $blog->delete();
        
        return redirect()->route('home');

    }
}
