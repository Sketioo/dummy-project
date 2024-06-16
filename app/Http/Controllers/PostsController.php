<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest as PostRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function customMethod()
    {
        return 'This is from custom method';
    }

    public function index()
    {
        $posts = Post::all();
        return view('post.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $data = $request->validated();
        if (!isset($data)) {
            return redirect()->route('posts.create');
        }

        $post = Post::create($data);

        return redirect()->route('posts.show', [
            'post' => $post->id
        ])->with('status', 'Succesfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        $postingan = Post::find($post);
        // dd($postingan);
        return view('post.show', [
            'post' => $postingan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('post.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        return redirect()->route('posts.show', [
            'post' => $post->id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
