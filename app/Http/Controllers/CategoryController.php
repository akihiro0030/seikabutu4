<?php

namespace App\Http\Controllers;

use App\Category;
class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['games'=>$category->getByCategory(),'categories'=>$category->get()]);
    }
}
