<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function addpost()
    {
        return view('admin.add_post');
    }

    public function createpost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $post->image = $imageName;
        $post->user_name = Auth::User()->name;
        $post->user_id = Auth::User()->id;
        // $post->save();
        if ($post->save()) {
            $request->image->move('img', $imageName);
            return redirect()->route('admin.addpost')->with('message', 'Post created successfully!');
        }
    }

    public function allpost()
    {
        $post = Post::all();
        return view('admin.allpost', compact('post'));
    }

    public function updatepost($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.updatepost', compact('post'));
    }

    public function postupdate(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_name = Auth::user()->name;
        $post->user_id = Auth::user()->id;

        if ($request->hasFile('image')) {

            // 🔥 Delete old image if exists
            if ($post->image && File::exists(public_path('img/' . $post->image))) {
                File::delete(public_path('img/' . $post->image));
            }

            // Upload new image
            $image = $request->image;
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);

            $post->image = $imageName;
        }

        $post->save();

        return redirect()->route('admin.allpost')
            ->with('message', 'Post updated successfully!');
    }

    public function deletepost($id)
    {
        $post = Post::findOrFail($id);

        // 🔥 Delete image if exists
        if ($post->image && File::exists(public_path('img/' . $post->image))) {
            File::delete(public_path('img/' . $post->image));
        }

        $post->delete();

        return redirect()->route('admin.allpost')
            ->with('message', 'Post deleted successfully!');
    }
}
