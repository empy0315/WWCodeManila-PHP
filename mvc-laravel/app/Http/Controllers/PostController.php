<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @summary List all posts
     * @return view
     */
    public function index() 
    {
        $posts = Post::all();
        return view('posts.all')
                ->with('posts', $posts);
    }

    /**
     * @return view
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * @summary Store form to Post table
     * @return view
     */
    public function store(Request $request)
    {
        $newPost = new Post();
        $newPost->title = $request->postTitle;
        $newPost->content = $request->postContent;
        $newPost->save();

        return redirect()
            ->route('post', $newPost);
    }

    /**
     * @summary List specific post
     * @return view
     */
    public function showPost($postId)
    {
        $post = Post::findOrFail($postId);
        return view('posts.stored')
                ->with('post', $post);
    }

    public function edit($postId)
    {
        $post = Post::findOrFail($postId);
        return view('posts.edit')
                ->with('post', $post);
    }
    public function edited(Request $request)
    {
        $post = Post::findOrFail($request->postId);
        $post->title = $request->postTitle;
        $post->content = $request->postContent;
        $post->save();

        return redirect()
            ->route('post', $post);
    }
        public function delete($postId)
    {
        $post = Post::findOrFail($postId);
        $post->delete();
        return view('welcome');
    }

}
