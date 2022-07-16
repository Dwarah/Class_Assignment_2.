<?php

namespace App\Http\Controllers;

Use App\Models\BlogPost;
use Illuminate\Http\Request;


class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all(); // fetch all blog posts from DataBase
        return view('blog.index', [
            'posts' => $posts,
        ]); // returns the view with posts
        
    }

    public function create()
    {
        return view('blog.create'); // show form to create blog posts
    }

    public function store(Request $request)
    {
       $newPost = BlogPost::create([
        'title' => $request->title,
        'body' => $request->body,
        'user_id' => 1
       ]); // store new blog posts
       return redirect('blog/' . $newPost->id);
    }

    public function show(BlogPost $blogPost)
    {
        
        return view('blog.show', [
            'post' => $blogPost,
        ]); //returns the view with the post
    }

    public function edit(BlogPost $blogPost)
    {
        return view('blog.edit',[
            'post' => $blogPost,
        ]); // returns edit view with the post
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]); // save eddited blog posts

        return redirect('blog/' . $blogPost->id);
    }

    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect('/blog'); // delete blog posts
    }
}
