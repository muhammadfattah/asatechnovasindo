@extends('layouts.index')
@section('content')
    <!-- Product -->
    <section class="page-section mt-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-4 mb-3">
                <div>
                    <h2 class="h3 mt-0 text-uppercase text-primary fw-bold" data-aos="fade-down"><i
                            class="bi bi-circle-fill me-2"></i>
                        Artikel
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-lg-6 col-md-8">
                    <form action="/artikel">
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Search.." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-4">
                @if (count($articles) == 0)
                    <div class="fw-bold fs-5 text-center mt-5">Artikel tidak ditemukan</div>
                @endif
                @foreach ($articles as $article)
                    <div class="col-lg-6 mt-4 d-table-cell position-relative mb-4">
                        <div class="rounded shadow pb-5 h-100" data-aos="flip-left"
                            data-aos-delay="{{ ($loop->index % 2) * 300 }}">
                            <a href="/artikel/{{ $article->slug }}"
                                class="d-block mb-4 overflow-hidden d-flex justify-content-center align-items-center rounded link-article"
                                style="height: 250px">
                                <img src="{{ asset('storage' . $article->thumbnail) }}" class="w-100">
                            </a>
                            <div class="px-3 mb-2">
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
                            <a href="/artikel/{{ $article->slug }}" class="text-decoration-none">
                                <h3 class="h6 mb-2 fw-bold px-3 text-uppercase">
                                    {{ $article->title }}
                                </h3>
                            </a>
                            <p class="text-justify-important px-3 text-muted small">
                                {{ $article->quote }}
                            </p>
                            <div class="px-3 position-absolute bottom-0 mb-4 end-0">
                                <a href="/artikel/{{ $article->slug }}" class="btn btn-primary btn-sm">
                                    Baca Artikel <i class="bi bi-chevron-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-5">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
