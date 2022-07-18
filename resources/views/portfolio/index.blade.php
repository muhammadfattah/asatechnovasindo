@extends('layouts.index')
@section('content')
    <!-- Portfolio -->
    <section class="page-section mt-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-4">
                <div class="mb-2">
                    <h2 class="h3 mt-0 text-uppercase text-primary fw-bold" data-aos="fade-down"><i
                            class="bi bi-circle-fill me-2"></i>
                        Portfolio
                    </h2>
                </div>
                @foreach ($portfolio as $port)
                    <div class="col-lg-4 col-md-6 text-center position-relative mb-5 d-table-cell" data-aos="flip-left"
                        data-aos-delay="{{ ($loop->index % 3) * 300 }}">
                        <div class="mt-5 pt-5 overflow-hidden box-porto2">
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
        </div>
    </section>
    @include('layouts.hubungi-kami')
@endsection
