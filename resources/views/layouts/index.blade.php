@php
$routes = [
    'Beranda' => '/',
    'Tentang Kami' => 'tentang-kami',
    'Produk' => 'produk',
    'Porfolio' => 'portfolio',
    'Client' => 'client',
    'Hubungi Kami' => 'hubungi-kami',
];
@endphp
@include('layouts.header')
@yield('content')
@include('layouts.footer')
