<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $title = "Cadastrar";
        return view('pages.auth.register', compact('title'));
    }
}
