@php
$routes = [
    'Slider' => ['/admin/slider', 'fa fa-image fa-fw', 'super admin'],
    'Tentang Perusahaan' => ['/admin/tentang-perusahaan', 'fa fa-info fa-fw', 'super admin'],
    'Layanan' => ['/admin/layanan', 'fa fa-user-tie fa-fw', 'super admin'],
    'Produk' => ['/admin/produk', 'fa fa-desktop fa-fw', 'super admin'],
    'Portfolio' => ['/admin/portfolio', 'fa fa-list-alt fa-fw', 'super admin'],
    'Client' => ['/admin/client', 'fa fa-child fa-fw', 'super admin'],
    'Artikel' => ['/admin/artikel', 'fa fa-newspaper fa-fw'],
    'Kontak' => ['/admin/kontak', 'fa fa-phone-alt fa-fw', 'super admin'],
    'Catalog' => ['/admin/catalog', 'fa fa-file-alt fa-fw', 'super admin'],
];

$routes2 = [
    'Profil Saya' => ['/profil', 'fa fa-user-cog fa-fw'],
    'Pengguna' => ['/pengguna', 'fa fa-users-cog fa-fw', 'super admin'],
];
@endphp
<html>

</html>
@include('layouts.header_admin')
@yield('content')
@include('layouts.footer_admin')
