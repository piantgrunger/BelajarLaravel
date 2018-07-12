<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\category;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = category::all();

        return view('post.create', compact('categories'));
    }

    public function store()
    {
        post::create([
            'title' => request('title'),
            'content' => request('content'),
            'category_id' => request('category_id'),
            'slug' => str_slug(request('title')),
        ]
        );

        return redirect()->route('post.index')->withInfo('Post Ditambahkan');
    }

    public function edit($id)
    {
        $categories = category::all();
        $post = post::find($id);

        return view('post.edit', compact('categories', 'post'));
    }

    public function update($id)
    {
        $post = post::find($id);
        $post->update([
            'title' => request('title'),
            'content' => request('content'),
            'category_id' => request('category_id'),
            'slug' => str_slug(request('title')),
        ]);

        return redirect()->route('post.index')->withInfo('Post Diedit');
    }

    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();

        return redirect()->route('post.index')->withDanger('Post Dihapus');
    }

    public function show($id)
    {
        $post = post::find($id);

        return view('post.show', compact('post'));
    }
}
