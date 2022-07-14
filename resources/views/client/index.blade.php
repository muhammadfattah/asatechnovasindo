@extends('layouts.index')
@section('content')
    <!-- Portfolio -->
    <section class="page-section mt-5">
        <div class="container px-4 px-lg-5">
            <div class="mb-5">
                <h2 class="h3 mt-0 text-uppercase text-primary fw-bold"><i class="bi bi-circle-fill me-2"></i>
                    Client
                </h2>
            </div>
            <div class="row gx-4 gx-lg-4 justify-content-around client-box align-items-center p-5">
                @foreach ($clients as $client)
                    <div class="col-lg-2 col-md-3 col-4 text-center mb-5">
                        <a href="{{ asset('storage' . $client->filename) }}">
                            <img src="{{ asset('storage' . $client->filename) }}" class="w-100 client-img">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('layouts.hubungi-kami')
@endsection
