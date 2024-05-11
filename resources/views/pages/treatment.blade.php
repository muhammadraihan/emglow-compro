@extends('frontend.emglow')

@section('title')
    Treatment eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="products-emglow emglow-treatment mt-0 pt-0">
        <div class="header-section mt-0">
            <h1 class="fw-bold text-white">Pilihan Treatment Kecantikan eMGlow Aesthetics Centre</h1>
        </div>
        <div class="container">
            <div class="banner">
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
                                    <a href="{{ route('treatment-detail', $item->uuid) }}" class="link">Lihat
                                        detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
