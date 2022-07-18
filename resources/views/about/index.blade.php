@extends('layouts.index')
@section('content')
    <!-- Profil -->
    <section class="page-section mt-5 pb-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-4 justify-content-center align-items-sm-start">
                <div class="mb-5 ms-5">
                    <h2 class="h3 mt-0 text-uppercase text-primary fw-bold" data-aos="fade-down"><i
                            class="bi bi-circle-fill me-2"></i>
                        Profil
                    </h2>
                </div>
                <div class="col-lg-10 text-center">
                    <img src="{{ asset('storage' . $profile->section_1_image) }}" width="90%" class="about-img mb-5"
                        data-aos="fade-up">
                </div>
                <div class="col-lg-12">
                    <p class="mb-4 text-justify-important" data-aos="fade-down">
                        {!! nl2br(stripcslashes($profile->section_1)) !!}
                    </p>
                </div>
                <div class="col-lg-6 mb-5">
                    <p class="mb-4 text-justify-important" data-aos="fade-down">
                        {!! nl2br(stripcslashes($profile->section_2)) !!}
                    </p>
                </div>
                <div class="col-lg-6 text-center mb-5">
                    <img src="{{ asset('storage' . $profile->section_2_image) }}" width="90%" class="about-img mb-5"
                        data-aos="fade-left">
                </div>
            </div>
        </div>
    </section>
    <!-- Visi dan Misi -->
    <section class="page-section mt-5 bg-dark padding-page-section">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-4 justify-content-around align-items-sm-start">
                <div class="mb-4">
                    <h2 class="h3 mt-0 text-uppercase text-white fw-bold" data-aos="fade-down"><i
                            class="bi bi-circle-fill me-2"></i>
                        Visi Misi
                    </h2>
                </div>
                <div class="col-lg-5 mb-4">
                    <h4 class="mt-0 text-uppercase text-white fw-bold" data-aos="fade-left">
                        Visi
                    </h4>
                    @foreach ($visions as $vision)
                        <div class="d-flex text-white" data-aos="fade-left" data-aos-delay="{{ $loop->iteration * 300 }}">
                            <i class="bi bi-check-circle me-3 fs-5"></i>
                            <div>
                                <p class="text-justify-important text-white">
                                    {{ $vision->vision }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-5 mb-4">
                    <h4 class="mt-0 text-uppercase text-white fw-bold" data-aos="fade-left">
                        Misi
                    </h4>
                    @foreach ($missions as $mission)
                        <div class="d-flex text-white" data-aos="fade-left" data-aos-delay="{{ $loop->iteration * 300 }}">
                            <i class="bi bi-check-circle me-3 fs-5"></i>
                            <div>
                                <p class="text-justify-important text-white">
                                    {{ $mission->mission }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @include('layouts.hubungi-kami')
@endsection
