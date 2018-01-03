<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index() {

        $categories = Category::all();
        return view('forum.index')->with('categories', $categories);
    }
}
