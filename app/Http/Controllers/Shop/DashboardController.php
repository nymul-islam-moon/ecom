<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }
}
