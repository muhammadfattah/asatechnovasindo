<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index', [
            'clients' => Client::all()
        ]);
    }
}
