<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use App\Models\Categories;

class PostController extends Controller
{
    //

    public function index()
    {
        $posts = Post::all();
        $categories = Categories::all();
        return view('index', compact('posts', 'categories'));
    }

    public function show($id){
        $post = Post::find($id);
        $categories = Categories::all();
        return view('post-details', compact('post', 'categories'));
    }

    public function add()
    {
        $categories = Categories::all();
        return view('admin.posts.add', compact('categories'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Categories::all();
        return view('admin.posts.edit', ['post'=>$post, 'categories'=>$categories]);
    }

    public function update(Request $request, $id)
    {
        $post_image = "";
        if($request->hasFile('image')){
            $image = $request->file('image');
            $post_image = $image->getClientOriginalName();
        }

        $post = Post::find($id);
        $post->post_title = $request->post_title;
        $post->categories_id = $request->cat_id;
        if(!empty($post_image)) $post->image = $post_image;
        $post->content = $request->post_content;
        $post->save();

        $this->uploadImage($request, $post->id);
        return back()->with(['message' => 'Post added successfully!']);
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

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return back()->with(['message' => 'Post deleted successfully!']);
    }

}
