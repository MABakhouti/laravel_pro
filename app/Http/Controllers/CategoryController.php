<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    //
    public function Index(){
        $categories = Categories::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function edit($id){
        $category = Categories::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function add(){
        return view('admin.categories.add');
    }

    public function update(Request $request, $id){
        $category = Categories::find($id);
        $category->name = $request->category_name;
        $category->save();
        return back()->with(['message' => 'Post updated successfully!']);
    }
}
