        <!-- Footer-->
        <footer class="bg-dark py-5">
            <div class="container">
                <div class="row text-white">
                    <div class="col-lg-4 mb-5">
                        <h1 class="fs-6 fw-bold">CV. ASA TECHNOVASINDO</h1>
                        <span class="d-block fw-bold mb-3 fs-6">Hubungi Tim Spesialist Kami:</span>
                        @foreach ($contacts['team'] as $ct)
                            <span class="d-block fs-6"><a href="tel:{{ str_replace('-', '', $ct->phone) }}"
                                    class="text-decoration-none fw-bold link-light">{{ $ct->phone }}</a> :
                                {{ $ct->position }}</span>
                        @endforeach
                    </div>
                    <div class="col-lg-3 mb-5">
                        <span class="d-block fw-bold mb-3 fs-6">Link Halaman</span>
                        @foreach ($routes as $key => $value)
                            <a href="{{ $value }}"
                                class="d-block text-white text-decoration-none link-light mb-2">
                                <i class="bi bi-chevron-right"></i> {{ $key }}
                            </a>
                        @endforeach
                    </div>
                    <div class="col-lg-3 mb-5">
                        <span class="d-block fw-bold mb-3 fs-6">Layanan Kami</span>
                        @foreach ($footer_services as $footer_service)
                            <a href="/layanan" class="d-block text-white text-decoration-none link-light mb-2">
                                <i class="bi bi-chevron-right"></i> {{ $footer_service->title }}
                            </a>
                        @endforeach
                        <a href="/layanan" class="d-block text-white text-decoration-none link-light mb-2">
                            <i class="bi bi-chevron-right"></i> Lainnya
                        </a>
                    </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5">
                <div class="small text-center text-white text-uppercase">Copyright &copy; {{ date('Y') }} - ASA
                    TECHNOVASINDO</div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
        </body>

        </html>
