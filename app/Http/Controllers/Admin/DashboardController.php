<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.index', compact('categories'));
    }
}
