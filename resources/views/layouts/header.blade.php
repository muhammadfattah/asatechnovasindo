<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ASA TECHNOVASINDO</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="/assets/favicon.png" type="image/x-icon">
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 navbar-shrink" id="mainNav">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href="/">
                <img src="/assets/img/logoasatech.png" height="60px">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul
                    class="navbar-nav ms-auto my-2 my-lg-0 text-center d-lg-flex d-block align-items-center justify-content-center">
                    @php
                    @endphp
                    @foreach ($routes as $key => $value)
                        <li class="nav-item"><a class="nav-link @if (request()->is($value) || request()->is($value . '/*')) active @endif"
                                href="{{ $value }}">{{ $key }}</a></li>
                    @endforeach
                    <li class="nav-item ms-0 ms-lg-3 mt-1"><a class="btn btn-outline-light"
                            href="{{ asset('storage' . $catalog->filename) }}" target="_blank">E-Catalog</a></li>
                </ul>
            </div>
        </div>
    </nav>
