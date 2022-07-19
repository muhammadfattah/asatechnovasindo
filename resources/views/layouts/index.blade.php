@php
$routes = [
    'Beranda' => '/',
    'Tentang Kami' => 'tentang-kami',
    'Layanan' => 'layanan',
    'Produk' => 'produk',
    'Portfolio' => 'portfolio',
    'Client' => 'client',
    'Artikel' => 'artikel',
    'Hubungi Kami' => 'hubungi-kami',
];
@endphp
@include('layouts.header')
@yield('content')
@include('layouts.footer')
