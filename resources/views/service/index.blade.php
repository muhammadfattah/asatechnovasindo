@extends('layouts.index')
@section('content')
    <!-- Layanan -->
    <section class="page-section mt-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-4">
                <div class="mb-2">
                    <h2 class="h3 mt-0 text-uppercase text-primary fw-bold" data-aos="fade-down"><i
                            class="bi bi-circle-fill me-2"></i>
                        Layanan
                    </h2>
                </div>
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
            </div>
        </div>
    </section>
    @include('layouts.hubungi-kami')
@endsection
