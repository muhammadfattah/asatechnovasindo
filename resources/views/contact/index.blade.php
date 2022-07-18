@extends('layouts.index')
@section('content')
    <!-- Portfolio -->
    <section class="page-section mt-5">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row gx-4 gx-lg-4">
                <div class="col-12">
                    <iframe src="{{ $contacts->street_maps }}" width="100%" height="500" class="box-map"
                        allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        data-aos="fade-up"></iframe>
                </div>
                <div class="col-lg-8 mt-3">
                    <div class="bg-dark box-contact text-white p-5">
                        <p class="mb-4 text-justify-important" data-aos="fade-down">
                            Ingin berkonsultasi dalam hal pengembangan layanan sistem informasi & pengembangan aplikasi
                            anda, silahkan hubungi kami di :
                        </p>
                        <h1 class="fw-bold text-primary mb-4" data-aos="fade-down" data-aos-delay="300">CV. ASA
                            TECHNOVASINDO</h1>
                        <p class="text-justify-important" data-aos="fade-down" data-aos-delay="600">
                            {{ $contacts->address }}
                        </p>
                        <table>
                            <tr data-aos="fade-down" data-aos-delay="900">
                                <td>HP/SMS/WA</td>
                                <td class="px-3">:</td>
                                <td>
                                    <a class="text-decoration-none"
                                        href="tel:{{ str_replace('-', '', $contacts->phone) }}">
                                        {{ $contacts->phone }}
                                    </a>
                                </td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="1200">
                                <td>Email</td>
                                <td class="px-3">:</td>
                                <td>
                                    <a class="text-decoration-none"
                                        href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
                                </td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="1500">
                                <td>Website</td>
                                <td class="px-3">:</td>
                                <td>
                                    <a class="text-decoration-none"
                                        href="{{ $contacts->website }}">{{ $contacts->website }}</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 mt-3" data-aos="fade-down">
                    <iframe src="{{ $contacts->maps }}" width="100%" height="450" class="box-map"
                        allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
