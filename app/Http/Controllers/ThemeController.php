<?php

namespace App\Http\Controllers;

class ThemeController extends Controller
{
    public function create()
    {
        return view('theme.create');
    }

    public function index()
    {
        return view('theme.index');
    }
}
