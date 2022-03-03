<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        return view('layout.content')
                    ->with('title', 'Digital Trend');
    }

    public function about()
    {
        return view('layout.about')
                    ->with('title', 'About');
    }

    public function contact()
    {
        return view('layout.contact')
                    ->with('title', 'Contact');
    }
}
