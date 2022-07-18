@php
$routes = [
    'Slider' => ['/admin/slider', 'fa fa-image fa-fw'],
    'Tentang Perusahaan' => ['/admin/tentang-perusahaan', 'fa fa-info fa-fw'],
    'Layanan' => ['/admin/layanan', 'fa fa-user-tie fa-fw'],
    'Produk' => ['/admin/produk', 'fa fa-desktop fa-fw'],
    'Portfolio' => ['/admin/portfolio', 'fa fa-list-alt fa-fw'],
    'Client' => ['/admin/client', 'fa fa-child fa-fw'],
    'Kontak' => ['/admin/kontak', 'fa fa-phone-alt fa-fw'],
    'Catalog' => ['/admin/catalog', 'fa fa-file-alt fa-fw'],
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
