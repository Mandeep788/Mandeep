<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('insert');
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
        $post=new post;
        $post->post_title=$request->get('title');
        $post->post_author=$request->get('author');
        $post->save();

        return redirect('show');

        echo "<h1>Data inserted successfully!!!!</h1>";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        // //
        // $posts=post::paginate(10);
        // return view('show',['posts'=>$posts]);  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post,$id)
    {
        //
        $posts=post::find($id);
        return view('edit',['posts'=>$posts]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post,$id)
    {
        //
        $posts=post::find($id);
        $posts->post_title=$request->get('title');
        $posts->post_author=$request->get('author');
        $posts->save();

        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post,$id)
    {
        //
        $post=post::find($id);
        $post->delete();
        return redirect('show');
    }
}
