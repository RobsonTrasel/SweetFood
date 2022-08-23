<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = "Produtos";
        return view('pages.products.index', compact('title'));
    }
}
