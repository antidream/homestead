<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('category')->with('category', Category::getCategory());
    }

    public function CategoryGetNews($categoryPath) {
        return view('newsCategory')->with('news', News::getCategoryNews($categoryPath));
    }
}
