<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index()
    {
        $title = "Restaurantes";
        return view('pages.places.index', compact('title'));
    }
}
