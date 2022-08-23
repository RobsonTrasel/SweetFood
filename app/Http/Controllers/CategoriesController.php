<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $title = "Categorias";
        return view('pages.categories.index', compact('title'));
    }
}
