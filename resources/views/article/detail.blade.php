@extends('layouts.index')
@section('content')
    <!-- Product -->
    <section class="page-section">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-4">
                <div class="col-lg-8 shadow p-4 pb-5 mb-4">
                    <img src="{{ asset('storage' . $article->thumbnail) }}" class="w-100 mb-4 rounded">
                    <h2 class="text-uppercase h4 text-primary fw-bold">{{ $article->title }}</h2>
                    <div class="mb-3">
                        <span class="small">
                            <a href="/artikel?author={{ $article->user->username }}" class="text-decoration-none">
                                <i class="bi bi-person"></i> {{ $article->user->fullname }}
                            </a>
                        </span>
                        <span class="small ms-1 text-primary">
                            <i class="bi bi-clock"></i>
                            {{ date('M d, Y', strtotime($article->updated_at)) }}
                        </span>
                    </div>
                    <div class="mb-5">
                        {!! $article->content !!}
                    </div>
                    <hr />
                </div>
                <div class="col-lg-4 py-4 ps-lg-5 pe-lg-0 px-0">
                    <div class="row">
                        @if (count($articles) > 0)
                            <span class="fw-bold text-primary mb-3">Artikel Lainnya :</span>
                        @endif
                        @foreach ($articles as $ar)
                            <div class="col-lg-12 col-md-4 col-6 mb-4 d-table-cell">
                                <div class="rounded shadow w-100 pb-3 h-100">
                                    <a href="/artikel/{{ $ar->slug }}"
                                        class="d-block mb-2 overflow-hidden d-flex justify-content-center align-items-center rounded link-article"
                                        style="height: 150px">
                                        <img src="{{ asset('storage' . $ar->thumbnail) }}" class="w-100">
                                    </a>
                                    <div class="px-3 mb-2">
                                        <span class="small">
                                            <a href="/artikel?author={{ $article->user->username }}"
                                                class="text-decoration-none">
                                                <i class="bi bi-person"></i> {{ $ar->user->fullname }}
                                            </a>
                                        </span>
                                        <span class="small ms-1 text-primary">
                                            <i class="bi bi-clock"></i>
                                            {{ date('M d, Y', strtotime($ar->updated_at)) }}
                                        </span>
                                    </div>
                                    <a href="/artikel/{{ $ar->slug }}" class="text-decoration-none">
                                        <p class="mb-2 fw-bold px-3 text-uppercase small">
                                            {{ $ar->title }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
