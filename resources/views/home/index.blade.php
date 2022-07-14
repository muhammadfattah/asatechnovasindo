    @extends('layouts.index')
    @section('content')
        {{-- Carousel --}}
        <div id="carousel" class="carousel slide carousel-fade mt-lg-0" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-caption d-flex justify-content-center align-items-center flex-column">
                    <h4 class="mb-2 mt-4" data-aos="fade-down">PENUHI KEBUTUHAN
                        DIGITALISASI USAHA ANDA
                    </h4>
                    <p class="fst-italic" data-aos="fade-down">
                        Dengan adanya sistem informasi berbasis internet atau digital yang bisa diakses secara online
                        tentunya akan membuat pelayanan publik itu diperbarui menjadi lebih baik lagi, sehingga dengan
                        demikian proses pelayanan publik bisa berjalan dengan lebih cepat.
                    </p>
                    <a href="#profile" class="btn btn-outline-light btn-xl fw-bold btn-carousel d-none d-sm-block"
                        data-aos="fade-up">
                        Read More
                        <i class="bi bi-arrow-down"></i>
                    </a>
                </div>
                <div class="carousel-item active">
                    <img src="/assets/img/carousel/image-2.jpg" class="d-block">
                    <div class="carousel-caption d-flex justify-content-center align-items-center flex-column">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carousel/image-3.jpg" class="d-block">
                    <div class="carousel-caption d-flex justify-content-center align-items-center flex-column">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/carousel/image-1.jpg" class="d-block">
                </div>
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

        <!-- Layanan-->
        <section class="page-section">
            <div class="container px-4 px-lg-5">
                <div class="text-center mb-5">
                    <h2 class="mt-0 text-uppercase text-primary">Layanan</h2>
                    <hr class="divider" />
                </div>
                <p class="mb-4 text-center">
                    Seiring perkembangan zaman dan sesuai visi & misi perusahaan <b>CV. ASA
                        TECHNOVASINDO</b>, maka kami
                    akan terus
                    menerus melakukan inovasi demi menjadi perusahaan yang lebih berkompeten demi terwujudnya cita-cita
                    bersama dengan menghadirkan berbagai layanan seperti :
                </p>
                <div class="row gx-4 gx-lg-5 justify-content-around">
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-3">
                        <div class="mt-5 p-5 box-layanan">
                            <i class="bi bi-view-list fs-1 mb-5 text-primary"></i>
                            <h3 class="h4 mb-4 text-primary">IT Consultant</h3>
                            <p class="pb-4">Spesialis teknis yang berfokus pada
                                integrasi
                                teknologi informasi ke dalam bisnis dan menunjukkan kepada klien cara menggunakan teknologi
                                TI secara lebih
                                efisien untuk membantu mencapai tujuan.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-3">
                        <div class="mt-5 p-5 box-layanan">
                            <i class="bi bi-view-list fs-1 mb-5 text-primary"></i>
                            <h3 class="h4 mb-4 text-primary">Apps Development</h3>
                            <p class="pb-4">Kami Pengembang Teknologi dalam pembuatan project
                                elektronika
                                Internet of Things (IoT) dengan kontrol sistem kendali untuk semua jenis keperluan
                                Berbasis
                                Internet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-3">
                        <div class="mt-5 p-5 box-layanan">
                            <i class="bi bi-view-list fs-1 mb-5 text-primary"></i>
                            <h3 class="h4 mb-4 text-primary">Hardware Interface</h3>
                            <p class="pb-4">Peran digital marketing consultant sangat dibutuhkan ketika
                                bisnis
                                Anda mengalami kebuntuan menemukan tujuan serta menyusun strategi sehingga kami hadir
                                memberikan Jasa Layanan ini.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-3">
                        <div class="mt-5 p-5 box-layanan">
                            <i class="bi bi-view-list fs-1 mb-5 text-primary"></i>
                            <h3 class="h4 mb-4 text-primary">Web Development</h3>
                            <p class="pb-4">Spesialis teknis yang berfokus pada integrasi teknologi informasi
                                ke dalam bisnis dan menunjukkan kepada klien cara menggunakan teknologi TI secara lebih
                                efisien untuk membantu mencapai tujuan.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-3">
                        <div class="mt-5 p-5 box-layanan">
                            <i class="bi bi-view-list fs-1 mb-5 text-primary"></i>
                            <h3 class="h4 mb-4 text-primary">Sistem Integrasi</h3>
                            <p class="pb-4">Kami Pengembang Teknologi dalam pembuatan project elektronika
                                Internet of Things (IoT) dengan kontrol sistem kendali untuk semua jenis keperluan Berbasis
                                Internet.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-3">
                        <div class="mt-5 p-5 box-layanan">
                            <i class="bi bi-view-list fs-1 mb-5 text-primary"></i>
                            <h3 class="h4 mb-4 text-primary">Digital Marketing</h3>
                            <p class="pb-4">Peran digital marketing consultant sangat dibutuhkan ketika
                                bisnis
                                Anda mengalami kebuntuan menemukan tujuan serta menyusun strategi sehingga kami hadir
                                memberikan Jasa Layanan ini.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="/produk" class="btn btn-primary btn-xl fw-bold mt-5 btn-porto">
                            Lihat Produk
                            <i class="bi bi-chevron-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <section class="page-section bg-dark">
            <div class="container px-4 px-lg-5 text-center">
                <div class="text-center mb-5">
                    <h2 class="mt-0 text-white text-uppercase">Portfolio</h2>
                    <hr class="divider divider-light" />
                </div>
                <p class="mb-2 text-center text-white">
                    Beberapa pengalaman pekerjaan yang sudah dan sedang Kami kerjakan sesuai bidang usaha Kami :
                </p>
                <div class="row gx-4 gx-lg-5 justify-content-around">
                    @foreach ($portfolio as $port)
                        <div class="col-lg-4 col-md-6 text-center position-relative mb-5 d-table-cell">
                            <div class="mt-5 pt-5 box-porto">
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
                <a href="/portfolio" class="btn btn-outline-light btn-xl fw-bold mt-5 btn-porto">
                    Portfolio Selengkapnya
                    <i class="bi bi-chevron-double-right"></i>
                </a>
            </div>
        </section>

        <!-- Hubungi Kami-->
        <section class="page-section bg-primary hubungi-kami">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center mb-3 text-white">
                        <h2 class="mt-0">Ingin konsultasi aplikasi untuk bisnis atau perusahaan anda?</h2>
                        <p class="mb-2">
                            Hubungi tim kami sekarang untuk mendapatkan layanan sistem informasi dan aplikasi yang anda
                            inginkan di segala bidang.
                        </p>
                        <div class="d-flex mt-5 justify-content-center flex-sm-row flex-column">
                            <div class="d-flex justify-content-center mx-2 mb-3">
                                <a href="https://api.whatsapp.com/send?phone=6285266955852"
                                    class="btn btn-success btn-xl btn-wa btn-hub" target="_blank">
                                    <i class="bi bi-whatsapp fs-3 me-2"></i> <span>Chat Sekarang</span>
                                </a>
                            </div>
                            <div class="d-flex justify-content-center mx-2 mb-3">
                                <a href="tel:+6285266955852" class="btn btn-dark btn-hub">
                                    <i class="bi bi-telephone fs-3 me-2"></i> <span>0852-6695-5852</span>
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
                    <h2 class="mt-0 text-uppercase text-primary">Client</h2>
                    <hr class="divider" />
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center p-5 client-box">
                    @foreach ($clients as $client)
                        <div class="col-lg-3 col-md-4 col-6 text-center mb-5">
                            <a href="{{ asset('storage' . $client->filename) }}">
                                <img src="{{ asset('storage' . $client->filename) }}" class="w-100 client-img">
                            </a>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        <a href="/client" class="btn btn-primary btn-xl fw-bold mt-5 btn-porto">
                            Client Selengkapnya
                            <i class="bi bi-chevron-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endsection
