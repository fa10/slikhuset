<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {

    }

    public function index(Post $post)
    {
        $posts = $post->all();
        return view('admin.posts.index')->with('posts', $posts);
    }


    public function create()
    {
        return view('admin.posts.store');
    }


    public function store(Request $request)
    {
        $destinationPath = public_path('images/post');

        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move($destinationPath, $imageName);

        $post = new Post(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'imageUrl' => $imageName
        ));

        $post->save();

        return \Redirect::route('admin_post_create', array($post->title))->with('message', 'Tilføjet!');

    }


    public function show($id)
    {

    }

    public function edit($id)
    {

    }


    public function update($id)
    {

    }


    public function destroy($id)
    {

    }
}
