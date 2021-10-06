<?php

namespace Soorenaa\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use Soorenaa\Category\Responses\AjaxResponses;
use Soorenaa\Category\Repositories\CategoryRepo;
use Soorenaa\Category\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public $repo;

    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->repo = $categoryRepo;
    }

    public function index()
    {
        $categories = $this->repo->all();
        return view('Categories::index' , compact('categories'));
    }

    
    public function store(CategoryRequest $request)
    {
        $this->repo->store($request);
        return back();
    }


    public function edit($categoryId)
    {
        $category = $this->repo->findById($categoryId);
        $categories = $this->repo->allExceptById($categoryId);
        return view('Categories::edit' , compact('category' , 'categories'));
    }


    public function update($categoryId , CategoryRequest $request)
    {      
        $this->repo->update($categoryId , $request);
        return back();
    }


    public function destroy($categoryId)
    {
        $this->repo->delete($categoryId);
        return AjaxResponses::successResponse();
    }

    
}
