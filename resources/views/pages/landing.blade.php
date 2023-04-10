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
                    <div class="row justify-content-center align-items-center">
                        <div class="col-12 col-md-6 title-hero" data-aos="fade-up">
                            <h1>eMGlow Aesthetic Centre</h1>
                            <h4>by Dr Marlina</h4>
                            <p class="tagline">#HealthyGlowSkin</p>
                            <a href="#" class="btn btn-emglow-dark mt-2">Temukan perawatan untukmu <img
                                    src="/assets/arrow-right.svg" alt="Arrow"></a>
                        </div>
                        <div class="col-12 col-md-6 img-hero">
                            <img src="/assets/hero_dokmar_2.png" alt="Marlina" class="w-100" data-aos="fade-up">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <section class="promos">
        <div class="container">
            <div class="content-container">
                <div class="row">
                    <div class="col-12 col-md-5" data-aos="fade-left" data-aos-delay="100">
                        <div class="title-promos">
                            Hot Offer <img src="/img/fire-2.png" alt="Hot">
                        </div>
                        <div class="subtitle-promos">
                            Jangan sampai ketinggal promo spesial dari eMGlow Aesthetic Centre!
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="banner-thumbnail">
                                <div class="banner-img" style="background-image: url('/img/banner-1.jpeg')"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="banner-thumbnail">
                                <div class="banner-img" style="background-image: url('/img/banner-2.jpeg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="products-emglow">
        <div class="container">
            <div class="title" data-aos="fade-up">
                <h1>Solusi Perawatan Kulit Wajah Cerah & Bersinar</h1>
                <p>Cerahkan wajahmu dan sinari aktivitasmu dengan menemukan solusi perawatan kulit wajah yang tepat
                    untukmu.</p>
            </div>

            <!-- Treatment -->
            <div class="section-products">
                <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="header" data-aos="fade-up">
                            <h3>Featured Treatment</h3>
                            <h2>Best Treatment For Your #HealthyGlowSkin</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="treatment-list">
                <div class="treatment">
                    <div class="container pb-4 mb-5">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-10 treatment-card rounded-3 mb-4" data-aos="fade-up-right"
                                data-aos-delay="100">
                                <div class="row bg-white justify-content-center align-items-center py-3 px-1">
                                    <div class="col-md-3 rounded-2">
                                        <img class="img-fluid img-responsive rounded product-image"
                                            src="assets/Complete Pico Biaxis_Laser Full Face.png" alt="Treatment">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <h5>Complete Pico Biaxis Laser</h5>
                                        <p class="text-justify para mb-0">Lorem ipsum, dolor sit amet consectetur
                                            adipisicing elit. Beatae nobis tempore distinctio?</p>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="animate-charcter">Best Seller</h4>
                                        </div>
                                        <h6 class="text-success">Free consultation</h6>
                                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary-emglow btn-sm"
                                                type="button">Book
                                                Now</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 treatment-card rounded-3 mb-4" data-aos="fade-up-left"
                                data-aos-delay="200">
                                <div class="row bg-white justify-items-center align-items-center py-3 px-1">
                                    <div class="col-md-3 rounded-2">
                                        <img class="img-fluid img-responsive rounded product-image"
                                            src="assets/Crystal Cryopolisis_Shape and Slim Body.png" alt="Treatment">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <h5>Crystal Cryopolisis</h5>
                                        <p class="text-justify para mb-0">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Natus minus repudiandae est id ea?</p>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="animate-charcter">Recommended</h4>
                                        </div>
                                        <h6 class="text-success">Free consultation</h6>
                                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary-emglow btn-sm"
                                                type="button">Book
                                                Now</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10 treatment-card rounded-3 mb-4" data-aos="fade-up-right"
                                data-aos-delay="300">
                                <div class="row bg-white justify-items-center align-items-center py-3 px-1">
                                    <div class="col-md-3">
                                        <img class="img-fluid img-responsive rounded product-image"
                                            src="assets/Crystal Skin IPL Infusion.png" alt="Treatment">
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <h5>Crystal Skin IPL</h5>
                                        <p class="text-justify para mb-0">Lorem ipsum dolor sit amet consectetur
                                            adipisicing elit. Accusamus quidem omnis nobis sunt rerum maiores optio.</p>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <h4 class="animate-charcter">Recommended</h4>
                                        </div>
                                        <h6 class="text-success">Free consultation</h6>
                                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary-emglow btn-sm"
                                                type="button">Book
                                                Now</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center row">
                            <div class="col-12">
                                <div class="row justify-content-center">
                                    <div class="col-6 col-md-3">
                                        <button
                                            class="btn btn-outline-primary btn-sm w-100 rounded-pill lainnya-sm">Treatment
                                            Lainnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Treatment -->

            <!-- Skincare -->
            <section class="section-products">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="header" data-aos="fade-up">
                                <h3>Featured Product</h3>
                                <h2>Best Skincare For Your Skin</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3" data-aos="zoom-in-up" data-aos-delay="100">
                            <div id="product-1" class="single-product">
                                <div class="part-1">
                                </div>
                                <div class="part-2 mb-4">
                                    <h3 class="product-title text-truncate">eMGlow Sunscreen Smooth Glow</h3>
                                    <h4 class="product-price">Rp125.000</h4>
                                </div>
                                <button class="btn btn-outline-primary w-100 btn-sm rounded-pill">Lihat Detail</button>
                            </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3" data-aos="zoom-in-up" data-aos-delay="200">
                            <div id="product-2" class="single-product">
                                <div class="part-1">
                                    <span class="discount">Recommended</span>
                                </div>
                                <div class="part-2 mb-4">
                                    <h3 class="product-title text-truncate">eMBeaute Blush On</h3>
                                    <h4 class="product-price">Rp220.000</h4>
                                </div>
                                <button class="btn btn-outline-primary w-100 btn-sm rounded-pill">Lihat Detail</button>
                            </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3" data-aos="zoom-in-up" data-aos-delay="300">
                            <div id="product-3" class="single-product">
                                <div class="part-1">
                                </div>
                                <div class="part-2 mb-4">
                                    <h3 class="product-title text-truncate">eMGlow Night Cream Diamond Luxury</h3>
                                    <h4 class="product-price">Rp180.000</h4>
                                </div>
                                <button class="btn btn-outline-primary w-100 btn-sm rounded-pill">Lihat Detail</button>
                            </div>
                        </div>
                        <!-- Single Product -->
                        <div class="col-md-6 col-lg-4 col-xl-3" data-aos="zoom-in-up" data-aos-delay="400">
                            <div id="product-4" class="single-product">
                                <div class="part-1">
                                    <span class="discount">best seller</span>
                                </div>
                                <div class="part-2 mb-4">
                                    <h3 class="product-title text-truncate">eMGlow Hydrating Waterbank Essence</h3>
                                    <h4 class="product-price">Rp320.000</h4>
                                </div>
                                <button class="btn btn-outline-primary w-100 btn-sm rounded-pill">Lihat Detail</button>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center row mt-2">
                        <div class="col-6 col-md-3">
                            <button class="btn btn-primary-emglow btn-sm w-100 rounded-pill">Lihat Produk
                                Lainnya</button>
                        </div>
                    </div>
                </div>
            </section>
    </section>
    <!-- End Products -->

    <!-- Features -->
    <section class="features-emglow">
        <div class="features-container">
            <div class="container">
                <div class="content-features text-center">
                    <h1 data-aos="fade-up">Telah membantu banyak wanita di Indonesia memiliki wajah yang cantik dan
                        sehat.</h1>
                    <div class="row statistics">
                        <div class="col-6 col-md-3 mb-4" data-aos="fade-up-right" data-aos-delay="100">
                            <div class="numbers">
                                2260++
                            </div>
                            <div class="type">
                                Happy Customers
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="numbers">
                                120+
                            </div>
                            <div class="type">
                                Pilihan Treatment
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="numbers">
                                50++
                            </div>
                            <div class="type">
                                Produk Skincare
                            </div>
                        </div>
                        <div class="col-6 col-md-3 mb-4" data-aos="fade-up-left" data-aos-delay="400">
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

    <!-- Featured Treatment -->
    <section class="featured-treatment">
        <div class="container">
            <div class="row py-5 align-items-center">
                <div class="col-12 col-md-6" data-aos="fade-up-right">
                    <img src="assets/card-bio-axis.png" class="w-100" alt="Card">
                </div>
                <div class="col-12 col-md-6" data-aos="fade-up-left">
                    <h4>New Treatment</h4>
                    <h1 class="title">Pico Biaxis Laser</h1>
                    <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, repellat,
                        aliquam earum ut reprehenderit suscipit fugiat sit provident cum molestias architecto iure.
                        Reiciendis, ipsa?</p>
                    <a href="http://" target="_blank" class="btn btn-primary-emglow">Booking Sekarang</a>
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
            <div class="owl-carousel awards-carousel owl-theme px-5" data-aos="fade-up" data-aos-duration="300">
                <div class="item">
                    <div class="card">
                        <img src="http://placeimg.com/640/360/any" class="card-img-top rounded-top" alt="profile-image">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Rewarded</h5>
                            <span class="card-subtitle text-gray font-weight-normal">Oktober 2022</span>
                            <p class="card-text my-3">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="http://placeimg.com/640/360/any" class="card-img-top rounded-top" alt="profile-image">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Rewarded</h5>
                            <span class="card-subtitle text-gray font-weight-normal">Juni 2022</span>
                            <p class="card-text my-3">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="http://placeimg.com/640/360/any" class="card-img-top rounded-top" alt="profile-image">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Rewarded</h5>
                            <span class="card-subtitle text-gray font-weight-normal">Mei 2021</span>
                            <p class="card-text my-3">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="http://placeimg.com/640/360/any" class="card-img-top rounded-top" alt="profile-image">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Rewarded</h5>
                            <span class="card-subtitle text-gray font-weight-normal">Februari 2021</span>
                            <p class="card-text my-3">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="http://placeimg.com/640/360/any" class="card-img-top rounded-top" alt="profile-image">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Rewarded</h5>
                            <span class="card-subtitle text-gray font-weight-normal">Mei 2021</span>
                            <p class="card-text my-3">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="http://placeimg.com/640/360/any" class="card-img-top rounded-top" alt="profile-image">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Rewarded</h5>
                            <span class="card-subtitle text-gray font-weight-normal">Januari 2021</span>
                            <p class="card-text my-3">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- End Awards --}}

    {{-- Youtube --}}
    <section class="youtube-emglow">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-4" data-aos="fade-right" data-aos-duration="1000">
                    <div class="h4">
                        Dengar Dokter
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita voluptatibus, blanditiis enim cum
                        nostrum eius laboriosam neque architecto consequatur, iste cupiditate aliquid ipsa id.</p>
                </div>
                <div class="col-12 col-md-8" data-aos="fade-left" data-aos-duration="1200">
                    <iframe width="699" height="393" src="https://www.youtube.com/embed/rVAzWASpbA4"
                        title="Dengar Kata Dokter - Episode 1 | eMGlow Aesthetic Centre by dr. Marlina" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!--jumbo-->
        </div>
    </section>
    {{-- Youtube End --}}

    {{-- Education --}}
    <!-- Book -->
    <section class="booking" data-aos="fade-up">
        <div class="container">
            <div class="content">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-6 mt-3" data-aos="fade-up-right" data-aos-duration="1000">
                        <div class="cta mt-4 mb-3">Tahukah Kamu?</div>
                        <p class="education mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aut debitis magnam
                            provident ullam porro. Sit molestiae facilis voluptatum quam doloribus culpa alias! Illum
                            laudantium iste eius error quis quae.
                        </p>
                        <button class="btn btn-accent-emglow">Lihat selengkapnya</button>
                    </div>
                    <div class="col-12 col-md-4" data-aos="fade-up-left" data-aos-duration="1200">
                        <img src="assets/dokmar-book 1.png" alt="Dokmar" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    {{-- Education End --}}

    <!-- Komitmen -->
    <section class="commitment">
        <div class="container">
            <div class="row align-items-center d-flex" data-aos="fade-up">
                <div class="col-2 col-md-2">
                    <img src="assets/testi-icon.svg" alt="Testi" class="w-100">
                </div>
                <div class="col-8 col-md-6 ms-2">
                    <div class="title">
                        Komitmen eMGlow untuk kamu
                    </div>
                    <div class="desc">
                        Komitmen yang kami berikan untuk kamu yang perawatan dan menggunakan produk dari eMGlow
                        Aesthetic Centre.
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center commitment-box justify-content-center mt-5" data-aos="fade-up">
                <div class="col-12 col-md-6">
                    <img src="assets/circle-logo.png" alt="Logo" class="mb-4">
                    <p class="testi mb-3">"Treatment di eMGlow sangat nyaman dan menyenangkan. Awalnya diinformasikan
                        treatment apa yang cocok untuk aku yang aktif berolahraga ini. Top!"</p>
                    <h4 class="mb-2">Dr. Marlina</h4>
                    <p class="title">CEO eMGlow Aesthetic Centre</p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="assets/dokmar-testi.png" alt="Dokmar Testi" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

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
