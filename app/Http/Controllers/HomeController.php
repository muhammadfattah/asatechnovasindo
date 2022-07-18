<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SliderImage;
use App\Models\TeamContact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider  = Slider::first();
        $slider['image'] = SliderImage::all();
        $contacts = Contact::first();
        $contacts['team'] = TeamContact::all();
        return view('home.index', [
            'slider'          => $slider,
            'contacts'        => $contacts,
            'services'        => Service::orderBy('id', 'asc')->limit(3)->get(),
            'products'        => Product::orderBy('id', 'asc')->limit(3)->get(),
            'clients'         => Client::orderBy('id', 'asc')->limit(12)->get(),
            'portfolio'       => Portfolio::orderBy('id', 'asc')->limit(6)->get(),
            'catalog'         => Catalog::first(),
            'footer_services' => Service::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }
}
