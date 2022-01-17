<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): string
    {
        return view('index');
    }

    public function tours(): string
    {
        $data = Tour::all();
        return view('tours', ['tours'=> $data]);
    }

    public function about(): string
    {
        return view('about');
    }


}
