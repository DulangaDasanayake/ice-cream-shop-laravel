<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use \Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('index', ['products' => $products]);
    }

    public function products()
    {
        $products = DB::table('products')->get();
        return view('products', ['products' => $products]);
    }
}
