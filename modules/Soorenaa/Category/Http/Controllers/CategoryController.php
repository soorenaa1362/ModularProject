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

        // dd($request->all());

        return back();
    }

    
}
