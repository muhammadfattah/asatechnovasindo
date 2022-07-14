<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'clients'   => Client::orderBy('id', 'asc')->limit(12)->get(),
            'portfolio' => Portfolio::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }
}
