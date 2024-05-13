@extends('frontend.emglow')

@section('title')
    eMGlow Aesthetic Centre by Dr Marlina
@endsection

@section('content')
    <!-- Hero -->
    <section class="hero-emglow">
        <div class="cover-thumbnail">
            <div class="container">
                <div class="content-hero">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 title-hero" data-aos="fade-up">
                            <img src="assets/logo-old.png" alt="Logo" class="w-50">
                            <h1 class="mb-4">
                                Solusi Perawatan Kulit Wajah Cerah & Bersinar
                            </h1>
                            <a href="{{ route('treatment') }}" class="btn btn-emglow-dark">Temukan perawatan untukmu <img
                                    src="/assets/arrow-right.svg" alt="Arrow"></a>
                        </div>
                        <div class="col-12 col-md-6 img-hero">
                            <img src="/img/dokmar-hero-new.png" alt="Marlina" class="w-100" data-aos="fade-up">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    {{-- <section class="promos">
        <div class="container">
            <div class="content-container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="title-promos">
                            Hot Offer <img src="/img/fire-2.png" alt="Hot">
                        </div>
                        <div class="subtitle-promos">
                            Jangan sampai ketinggal promo spesial dari eMGlow Aesthetic Centre!
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="card bg-dark text-white">
                        <img src="https://placehold.co/600x400@2x.png" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section> --}}

    <!-- Features -->
    <section class="features-emglow">
        <div class="features-container">
            <div class="container">
                <div class="content-features text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-12">
                            <div class="title-section" data-aos="fade-up">Telah membantu banyak wanita di Indonesia memiliki
                                wajah yang cantik dan
                                sehat.
                            </div>
                        </div>
                    </div>
                    <div class="row statistics">
                        <div class="col-6 col-md-3 mb-4" data-aos="fade-up-right" data-aos-delay="100">
                            <div class="img-showoff-thumb">
                                <img src="img/happy-customer.png" alt="" class="w-50">
                            </div>
                            <div class="numbers">
                                2260++
                            </div>
                            <div class="type">
                                Happy Customers
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="img-showoff-thumb">
                                <img src="img/treatment.png" alt="" class="w-50">
                            </div>
                            <div class="numbers">
                                120+
                            </div>
                            <div class="type">
                                Pilihan Treatment
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="img-showoff-thumb">
                                <img src="img/natural-product.png" alt="" class="w-50">
                            </div>
                            <div class="numbers">
                                50++
                            </div>
                            <div class="type">
                                Produk Skincare
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-4" data-aos="fade-up-left" data-aos-delay="400">
                            <div class="img-showoff-thumb">
                                <img src="img/effective.png" alt="" class="w-50">
                            </div>
                            <div class="numbers">
                                99%
                            </div>
                            <div class="type">
                                Hasil Efektif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Products -->
    <section class="products-emglow">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="title" data-aos="fade-up">
                        <h1>Solusi Perawatan Kulit Wajah Cerah & Bersinar</h1>
                        <p>Cerahkan wajahmu dan sinari aktivitasmu dengan menemukan solusi perawatan kulit wajah yang tepat
                            untukmu.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="accent-img" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                        <img src="img/accent.png" alt="Accent Icon" class="w-75">
                    </div>
                </div>
            </div>

            <!-- Treatment -->
            <div class="banner">
                <div class="section-products">
                    <div class="row">
                        <div class="col-md-8 col-lg-6">
                            <div class="header" data-aos="fade-up">
                                Treatment Pilihan eMGlow Aesthetic Centre
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center" data-aos="fade-up">
                    @foreach ($treatment as $item)
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card h-100">
                                <div class="img-treatment-thumbnail">
                                    <img src="{{ asset('photo/' . $item->photo) }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                    <a href="{{ route('treatment-detail', $item->slug)}}" class="link">Lihat detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center row mt-5">
                <div class="col-6 col-md-4">
                    <a href="{{ route('treatment') }}">
                        <button class="btn btn-primary-emglow btn-sm w-100">Lihat Treatment Lainnya
                            Lainnya</button>
                    </a>
                </div>
            </div>
            <!-- End Treatment -->

            <!-- Skincare -->
            <div class="skincare">
                <div class="section-products">
                    <div class="row">
                        <div class="col-md-8 col-lg-6">
                            <div class="header" data-aos="fade-up">
                                Produk Skincare Terbaik dari eMGlow Aesthetic Centre
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skincare-product row row-cols-1 row-cols-md-3 g-4 justify-content-center" data-aos="fade-up">
                    @forelse ($produk as $item)
                        <div class="col-md-3 col-lg-3 col-6">
                            <a href="{{ $item->link }}">
                                <div class="card h-100">
                                    <div class="img-skincare-thumbnail">
                                        <img src="{{ asset('photo/' . $item->photo) }}" class="card-img-top"
                                            alt="Products">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title text-dark">{{ $item->name }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12">
                            Empty
                        </div>
                    @endforelse
                </div>
            </div>


            <div class="d-flex justify-content-center row mt-5">
                <div class="col-6 col-md-4">
                    <a class="nav-link {{ request()->is('store') ? 'active' : '' }}" href="{{ route('store') }}">
                        <button class="btn btn-primary-emglow btn-sm w-100">Lihat Produk
                            Lainnya</button>
                    </a>
                </div>
            </div>
    </section>
    <!-- End Products -->

    <!-- Featured Treatment -->
    <section class="featured-treatment">
        <div class="container">
            @foreach ($newtreatment as $item)
                <div class="row py-5 align-items-center">
                    <div class="col-12 col-md-6" data-aos="fade-up-right">
                        <img src="{{ asset('photo/' . $item->photo) }}" class="w-100" alt="Card">
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up-left">
                        <h4>
                            Treatment Baru eMGlow Aesthetic Centre
                        </h4>
                        <h1 class="title">{{ $item->name }}</h1>
                        <p class="desc">
                            {{ $item->deskripsi }}
                        </p>
            @endforeach
            @foreach ($about as $item)
                <div class="container-btn-cta">
                    <a href="{{ 'http://wa.me/' . $item->no_tlp }}" target="_blank"
                        class="btn btn-primary-emglow-dark">Booking
                        Sekarang</a>
                </div>
            @endforeach
        </div>
        </div>
        </div>
    </section>
    <!-- End -->

    {{-- Awards --}}
    <section class="awards-emglow">
        <div class="container">
            <div class="title-section" data-aos="fade-up" data-aos-duration="200">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="h2 d-flex align-items-center">Penghargaan <img src="/img/award.png" alt="Trophy">
                        </div>
                        <div class="subtitle">
                            Penghargaan yang diterima eMGlow Aesthetics Centre
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($award as $item)
                <div class="owl-carousel awards-carousel owl-theme px-5" data-aos="fade-up" data-aos-duration="300">
                    <div class="item">
                        <div class="card">
                            <img src="{{ asset('photo/' . $item->photo) }}" class="card-img-top rounded-top"
                                alt="profile-image">
                            <div class="card-body">
                                <h5 class="card-title mb-2">{{ $item->name }}</h5>
                                {{-- <span class="card-subtitle text-gray font-weight-normal">Oktober 2022</span> --}}
                                <p class="card-text my-3">{!! $item->deskripsi !!}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </section>
    {{-- End Awards --}}

    {{-- Youtube --}}
    <section class="youtube-emglow">
        <div class="container">
            <div class="row align-items-center justify-content-center d-flex">
                <div class="col-12 col-md-5" data-aos="fade-right" data-aos-duration="1000">
                    @foreach ($youtube as $item)
                        <div class="h4">
                            {{ $item->name }}
                        </div>
                        <p>
                            {{ $item->detail }}
                        </p>
                </div>
                <div class="col-12 col-md-7" data-aos="fade-left" data-aos-duration="1200">
                    <iframe width="600" height="400" src="https://www.youtube.com/embed/{{ $item->link }}"
                        title="Dengar Kata Dokter - Episode 1 | eMGlow Aesthetic Centre by dr. Marlina" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                @endforeach
            </div>
        </div>
        <!--jumbo-->
        </div>
    </section>
    {{-- Youtube End --}}

    {{-- Testimonial --}}
    <!-- TESTIMONIALS -->
    <section class="testimonials">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-5">
                    <div class="subtitle">TESTIMONIAL</div>
                    <div class="title">What Our Customers Say</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div id="customers-testimonials" class="owl-carousel">

                        <!--TESTIMONIAL 1 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="rounded" src="/assets/card-bio-axis.png" alt="">
                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                    Completely synergize resource taxing relationships via premier niche markets.
                                    Professionally cultivate.</p>
                            </div>
                            <div class="testimonial-name">
                                EMILIANO AQUILANI
                                <p>Mahasiswi, 28 tahun</p>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 1 -->
                        <!--TESTIMONIAL 2 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="rounded"
                                    src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                    alt="">
                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                    Completely synergize resource taxing relationships via premier niche markets.
                                    Professionally cultivate.</p>
                            </div>
                            <div class="testimonial-name">ANNA ITURBE<p>Mahasiswi, 28 tahun</p>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 2 -->
                        <!--TESTIMONIAL 3 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="rounded"
                                    src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                    alt="">
                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                    Completely synergize resource taxing relationships via premier niche markets.
                                    Professionally cultivate.</p>
                            </div>
                            <div class="testimonial-name">LARA ATKINSON<p>Mahasiswi, 28 tahun</p>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 3 -->
                        <!--TESTIMONIAL 4 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="rounded"
                                    src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                    alt="">
                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                    Completely synergize resource taxing relationships via premier niche markets.
                                    Professionally cultivate.</p>
                            </div>
                            <div class="testimonial-name">IAN OWEN<p>Mahasiswi, 28 tahun</p>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 4 -->
                        <!--TESTIMONIAL 5 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="rounded"
                                    src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg"
                                    alt="">
                                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                    Completely synergize resource taxing relationships via premier niche markets.
                                    Professionally cultivate.</p>
                            </div>
                            <div class="testimonial-name">MICHAEL TEDDY<p>Mahasiswi, 28 tahun</p>
                            </div>
                        </div>
                        <!--END OF TESTIMONIAL 5 -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF TESTIMONIALS -->
    {{-- End Testimonial --}}
@endsection
