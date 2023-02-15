<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
     return view('admin.category.index',compact('categories'));
    }
}
