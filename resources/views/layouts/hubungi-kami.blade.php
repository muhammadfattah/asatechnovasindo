<!-- Hubungi Kami-->
<section class="page-section bg-primary hubungi-kami">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center align-items-center">
            <div class="col-lg-9 mb-3 text-white text-lg-start text-center">
                <h4 class="mt-0" data-aos="fade-left">Hubungi <b>ASA TECHNOVASINDO</b> Sekarang.</h2>
                    <p class="mb-2" data-aos="fade-left">
                        Untuk Konsultasikan kebutuhan layanan sistem informasi dan aplikasi anda pada tim kami.
                    </p>
            </div>
            <div class="col-lg-3 p-0">
                <div>
                    <div class="d-flex justify-content-center mb-3" data-aos="zoom-in">
                        <a href="https://api.whatsapp.com/send?phone={{ str_replace('-', '', $contacts->phone) }}"
                            class="btn btn-success btn-hub btn-wa btn-wa" target="_blank">
                            <i class="bi bi-whatsapp fs-3 me-2"></i>
                            <span>Chat Sekarang!</span>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-3" data-aos="zoom-in" data-aos-delay="300">
                        <a href="tel:{{ str_replace('-', '', $contacts->phone) }}" class="btn btn-dark btn-hub">
                            <i class="bi bi-telephone fs-3 me-2"></i> <span>{{ $contacts->phone }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
