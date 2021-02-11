<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdatePost;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(storeUpdatePost $request)
    {

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function show($id)
    {

        // $post = Post::where('id', $id)->first();
        if (!$post = Post::find($id)) {
            return redirect()->route('posts.index');
        }

        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id)
    {
        $message = '';

        if ($post = Post::find($id)) {
            $post->delete();
            $message = "Post deletado com sucesso";
        }

        return redirect()
            ->route('posts.index')
            ->with('message', $message);
    }
}
