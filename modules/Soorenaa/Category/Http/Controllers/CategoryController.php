<?php

namespace Soorenaa\Category\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Soorenaa\Category\Models\Category;
use Soorenaa\Category\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('Categories::index' , compact('categories'));
    }

    
    public function store(CategoryRequest $request)
    {
        Category::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        return back();
    }


    public function edit(Category $category)
    {
        $categories = Category::where('id' , '!=' , $category->id)->get();
        return view('Categories::edit' , compact('category' , 'categories'));
    }


    public function update(Category $category , CategoryRequest $request)
    {
        $category->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        return back();
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json(['message' => 'عملیات حذف با موفقیت انجام شد .'], 200);
    }

    
}
