@extends('layouts.index')
@section('content')
    {{-- Carousel --}}
    <div id="carousel" class="carousel slide carousel-fade mt-lg-0" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($slider['image'] as $image)
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="{{ $loop->iteration - 1 }}"
                    class="@if ($loop->iteration == 1) active @endif"
                    aria-label="Slide {{ $loop->iteration - 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            <div class="carousel-caption d-flex justify-content-center align-items-center flex-column">
                <h4 class="mb-2 mt-4 text-uppercase" data-aos="fade-down">
                    {{ $slider->title }}
                </h4>
                <p class="fst-italic" data-aos="fade-down">
                    {{ $slider->description }}
                </p>
                <a href="/tentang-kami" class="btn btn-outline-light btn-xl fw-bold btn-carousel d-none d-sm-block"
                    data-aos="fade-up">
                    Lihat Selengkapnya
                    <i class="bi bi-chevron-double-right"></i>
                </a>
            </div>
            @foreach ($slider['image'] as $image)
                <div class="carousel-item @if ($loop->iteration == 1) active @endif">
                    <img src="{{ asset('storage' . $image->filename) }}" class="d-block">
                    <div class="carousel-caption d-flex justify-content-center align-items-center flex-column">
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Layanan -->
    <section class="page-section" style="margin-bottom: -60px">
        <div class="container px-4 px-lg-5">
            <div class="text-center mb-5">
                <h2 class="mt-0 text-uppercase text-primary" data-aos="fade-down">Layanan</h2>
                <hr class="divider" data-aos="fade-down" data-aos-delay="100" />
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-around">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-5 d-table-cell" data-aos="flip-left"
                        data-aos-delay="{{ ($loop->index % 3) * 300 }}">
                        <div class="mt-5 p-5 pb-0 box-layanan h-100">
                            <i class="bi bi-view-list fs-1 mb-5 text-primary"></i>
                            <h3 class="h4 mb-4 text-primary">{{ $service->title }}</h3>
                            <p class="pb-4">{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center" data-aos="fade-up">
                    <a href="/layanan" class="btn btn-primary btn-xl fw-bold mt-5 btn-porto">
                        Layanan Selengkapnya
                        <i class="bi bi-chevron-double-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk -->
    <section class="page-section mt-5 bg-dark">
        <div class="container px-4 px-lg-5">
            <div class="text-center mb-5" data-aos="fade-down">
                <h2 class="mt-0 text-uppercase text-white">Produk</h2>
                <hr class="divider divider-light" data-aos="fade-down" data-aos-delay="100" />
            </div>
            <div class="row gx-4 gx-lg-4">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-5 d-table-cell" data-aos="flip-left"
                        data-aos-delay="{{ ($loop->index % 3) * 300 }}">
                        <div class="mt-5 pt-5 overflow-hidden box-porto2 bg-light">
                            <h3 class="h6 mb-4 text-primary fw-bold px-3 text-uppercase">
                                {{ $product->application_name }}
                            </h3>
                            <a href="{{ asset('storage' . $product->filename) }}" class="d-block">
                                <img src="{{ asset('storage' . $product->filename) }}" class="w-75 porto-img">
                            </a>
                            <p class="pb-0 px-3 text-justify-important mt-5" style="font-size: 15px">
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center" data-aos="fade-up">
                <a href="/produk" class="btn btn-outline-light btn-xl fw-bold mt-5 btn-porto">
                    Produk Selengkapnya
                    <i class="bi bi-chevron-double-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio-->
    <section class="page-section" style="margin-bottom: -40px">
        <div class="container px-4 px-lg-5">
            <div class="text-center mb-5">
                <h2 class="mt-0 text-primary text-uppercase" data-aos="fade-down">Portfolio</h2>
                <hr class="divider" data-aos="fade-down" data-aos-delay="100" />
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-around">
                @foreach ($portfolio as $port)
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-5 d-table-cell" data-aos="flip-left"
                        data-aos-delay="{{ ($loop->index % 3) * 300 }}">
                        <div class="mt-5 pt-5
                        box-porto2">
                            <h3 class="h6 mb-4 text-primary fw-bold px-3 text-uppercase">
                                {{ $port->application_name }}
                            </h3>
                            <a href="{{ asset('storage' . $port->filename) }}" class="d-block">
                                <img src="{{ asset('storage' . $port->filename) }}" class="w-75 porto-img">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center" data-aos="fade-up">
                <a href="/portfolio" class="btn btn-primary btn-xl fw-bold mt-5 btn-porto">
                    Portfolio Selengkapnya
                    <i class="bi bi-chevron-double-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Hubungi Kami-->
    <section class="page-section bg-primary hubungi-kami">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center mb-3 text-white">
                    <h2 class="mt-0" data-aos="fade-down">Ingin konsultasi aplikasi untuk bisnis atau perusahaan anda?
                    </h2>
                    <p class="mb-2" data-aos="fade-down" data-aos-delay="500">
                        Hubungi tim kami sekarang untuk mendapatkan layanan sistem informasi dan aplikasi yang anda
                        inginkan di segala bidang.
                    </p>
                    <div class="d-flex mt-5 justify-content-center flex-sm-row flex-column">
                        <div class="d-flex justify-content-center mx-2 mb-3" data-aos="zoom-in">
                            <a href="https://api.whatsapp.com/send?phone={{ str_replace('-', '', $contacts->phone) }}"
                                class="btn btn-success btn-xl btn-wa btn-hub" target="_blank">
                                <i class="bi bi-whatsapp fs-3 me-2"></i> <span>Chat Sekarang</span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center mx-2 mb-3" data-aos="zoom-in" data-aos-delay="300">
                            <a href="tel:{{ str_replace('-', '', $contacts->phone) }}" class="btn btn-dark btn-hub">
                                <i class="bi bi-telephone fs-3 me-2"></i> <span>{{ $contacts->phone }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Kami-->
    <section class="page-section">
        <div class="container px-4 px-lg-5">
            <div class="text-center mb-5">
                <h2 class="mt-0 text-uppercase text-primary" data-aos="fade-down">Client</h2>
                <hr class="divider" data-aos="fade-down" data-aos-delay="100" />
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center p-5 client-box">
                @foreach ($clients as $client)
                    <div class="col-lg-3 col-md-4 col-6 text-center mb-5" data-aos="flip-left"
                        data-aos-delay="{{ $loop->index * 200 }}">
                        <a href="{{ asset('storage' . $client->filename) }}">
                            <img src="{{ asset('storage' . $client->filename) }}" class="w-100 client-img">
                        </a>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center" data-aos="fade-up">
                    <a href="/client" class="btn btn-primary btn-xl fw-bold mt-5 btn-porto">
                        Client Selengkapnya
                        <i class="bi bi-chevron-double-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
