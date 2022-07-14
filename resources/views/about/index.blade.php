@extends('layouts.index')
@section('content')
    <!-- Profil -->
    <section class="page-section mt-5 pb-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-4 justify-content-center align-items-sm-start">
                <div class="mb-5 ms-5">
                    <h2 class="h3 mt-0 text-uppercase text-primary fw-bold"><i class="bi bi-circle-fill me-2"></i>
                        Profil
                    </h2>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="/assets/img/carousel/image-2.jpg" width="90%" class="about-img mb-5">
                </div>
                <div class="col-lg-6">
                    <p class="mb-4 text-justify-important"><b class="text-primary">CV. ASA TECHNOVASINDO</b> adalah
                        Perusahaan yang bergerak dibidang Teknologi Informasi yang berfokus pada Pengembangan Sofware
                        dan Hardware, Penyedia barang dan Jasa Multimedia serta sistem komputerisasi berbasis teknologi
                        untuk mendukung kemajuan perkembangan teknologi global saat ini dan masa mendatang.
                    </p>
                    <p class="mb-4 text-justify-important">
                        <b class="text-primary">CV. ASA TECHNOVASINDO</b> sumber daya manusia profesional dan
                        berpengalaman dibidangnya
                        sehingga kami dapat memberikan pelayanan terbaik untuk menjamin kepuasaan para konsumen kami.
                    </p>
                </div>
                <div class="col-lg-6">
                    <p class="mb-4 text-justify-important">
                        Kami memiliki moto “Berkarya Untuk Bangsa Dan Menjadi Generasi Mandiri” dengan menghadirkan
                        Produk dan Jasa yang bermutu serta berkualitas terbaik bagi semua konsumen kami.
                    </p>
                    <p class="mb-4 text-justify-important">
                        Seiring perkembangan zaman dan sesuai visi & misi perusahaan <b class="text-primary">CV. ASA
                            TECHNOVASINDO</b>, maka kami
                        akan terus menerus melakukan inovasi demi menjadi perusahaan yang lebih berkompeten demi
                        terwujudnya cita-cita bersama.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="/assets/img/carousel/image-3.jpg" width="90%" class="about-img mb-5">
                </div>
            </div>
        </div>
    </section>
    <!-- Visi dan Misi -->
    <section class="page-section mt-5 bg-dark padding-page-section">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-4 justify-content-around align-items-sm-start">
                <div class="mb-4">
                    <h2 class="h3 mt-0 text-uppercase text-white fw-bold"><i class="bi bi-circle-fill me-2"></i>
                        Visi Misi
                    </h2>
                </div>
                <div class="col-lg-5 mb-4">
                    <h4 class="mt-0 text-uppercase text-white fw-bold">
                        Visi
                        </h3>
                        <div class="d-flex text-white">
                            <i class="bi bi-check-circle me-3 fs-5"></i>
                            <div>
                                <p class="text-justify-important text-white">
                                    Menjadi Perusahaan terbaik dalam bidangnya dan berkompeten untuk menjadi pilihan utama
                                    Konsumen
                                    dan Masyarakat luas
                                </p>
                            </div>
                        </div>
                        <div class="d-flex text-white">
                            <i class="bi bi-check-circle me-3 fs-5"></i>
                            <div>
                                <p class="text-justify-important text-white">
                                    Menjadi Perusahaan yang dapat berkarya untuk Bangsa demi terwujudnya Generasi Cerdas dan
                                    Mandiri
                                </p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-5 mb-4">
                    <h4 class="mt-0 text-uppercase text-white fw-bold">
                        Misi
                        </h3>
                        <div class="d-flex text-white">
                            <i class="bi bi-check-circle me-3 fs-5"></i>
                            <div>
                                <p class="text-justify-important text-white">
                                    Menciptakan Produk dengan inovasi dan konsep kreatif berbasis Teknologi
                                </p>
                            </div>
                        </div>
                        <div class="d-flex text-white">
                            <i class="bi bi-check-circle me-3 fs-5"></i>
                            <div>
                                <p class="text-justify-important text-white">
                                    Menyediakan Produk dan Jasa yang terbaik untuk para konsumen
                                </p>
                            </div>
                        </div>
                        <div class="d-flex text-white">
                            <i class="bi bi-check-circle me-3 fs-5"></i>
                            <div>
                                <p class="text-justify-important text-white">
                                    Berperan sebagai inspirator. kreator, inovator, dan konsultan dalam bidang teknologi
                                </p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.hubungi-kami')
@endsection
