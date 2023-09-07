<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class HomeControllers extends Controller
{
    public function index() {
        $cates = Categories::all();
        $pro_spotlight = Products::where('pro_spotlight', 1) -> get();
        $pro_special = Products::where('pro_special', 1) -> first();
        return view('home.home', ['cates' => $cates, 'pro_spotlight' => $pro_spotlight, 'pro_special' => $pro_special]);
    }
}
