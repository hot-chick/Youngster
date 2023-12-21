<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function post_create(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ], [
            "image.required" => "Поле обязательно для заполнения!",
        ]);
        $post_data = $request->all();
        $user_id = Auth::user()->id;

        $name = $request->file('image')->hashName();
        $path = $request->file('image')->store('public/img');

        $post = Post::create([
            'image' => $name,
            'description' => $post_data['description'],
            'user_id' => $user_id,
        ]);
        if ($post) {
            return redirect("/main")->with("success", "");
        } else {
            return redirect()->back()->with("error", "Неверный логин или пароль");
        }
    }
    public function posts()
    {
        $posts = Post::all();

        return view("/main", ["posts" => $posts]);
    }


    public function post_page($id)
    {
        $post = Post::findOrFail($id);

        return view('/post_update', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $name = $request->file('image')->hashName();
        $path = $request->file('image')->store('public/img');

        $post = Post::findOrFail($id);
        $post->update([
            'image' => $name,
            'description' => $request->input('description'),
        ]);
        return redirect()->route('profile')->with('success', '');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('profile')->with('success', 'Пост успешно удален');
    }
}
