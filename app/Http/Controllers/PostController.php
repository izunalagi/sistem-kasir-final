<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function data(Request $request)
    {
        $posts = Post::all();
        return view('post.data', compact('posts'));
    }

    public function create(Request $request)
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $post = Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        return redirect()->route('admin.post.data')->with('success', 'Data Berhasil Diubah');

        return redirect()->route('admin.post.data');
    }

    public function edit($id)
    {
        $ganti = Post::find($id);
        return view('post.edit', compact(['ganti']));
    }

    public function update($id, Request $request)
    {
        $ganti = Post::find($id);
        $input = $request->all();
        $ganti->update($input);
        return redirect()->route('admin.post.data')->with('success', 'Data Berhasil Diubah');
    }

    public function  destroy($id)
    {
        $ganti = Post::find($id);
        $ganti->delete();
        return redirect()->route('admin.post.data')->with('success', 'Data Berhasil Dihapus');
    }
}
