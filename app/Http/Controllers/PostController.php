<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function add()
    {
        return view('admin.posts.add');
    }

    public function store(Request $request)
    {
        $post_image = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $post_image = $image->getClientOriginalName();
        }

        $post = new Post();
        $post->post_title = $request->post_title;
        $post->categories_id = $request->cat_id;
        $post->content = $request->post_content;
        $post->image = $post_image;
        $post->save();

        $this->uploadImage($request, $post->id);
        return back()->with(['message' => 'Post added successfully!']);
    }

    public  function uploadImage(Request $request, $post_id){
        if($request->hasFile('image')){
            $path = public_path("post_images/post_$post_id");
            if(!file_exists($path)){
                mkdir($path, 0777, true);
            }
            $image = $request->file('image');
            $post_image = $image->getClientOriginalName();
            $image->move($path, $post_image);
        }
    }

    public function adminIndex(){
        $posts = Post::all();
        return view('admin.posts.index', ['posts'=>$posts]);
    }

}
