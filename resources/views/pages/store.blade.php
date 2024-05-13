@extends('frontend.emglow')

@section('title')
    Produk eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="store mb-5">
        <div class="header-section">
            <h1 class="text-white fw-bold">Product Terbaik Dari eMGlow Aesthetic Centre</h1>
            {{-- <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 justify-content-center">
                    <div class="row">
                        <div class="col-6">
                            <div class="image">
                                <img src="/img/BPOM.png" alt="BPOM" class="w-50">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="image">
                                <img src="/img/label-halal.png" alt="Halal" class="w-50">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="container-fluid mt-5 mb-5">
            <div class="row g-2">
                <div class="col-md-9">
                    <div class="row g-2">
                        @foreach ($produk as $item)
                        <div class="col-md-4 mb-4">
                            <a href="#">
                                <div class="product p-4">
                                    <div class="text-center">
                                        <img src="{{ asset('photo/' . $item->photo) }}" class="w-100">
                                    </div>
                                    <div class="about">
                                        <h5>{{ $item->name }}</h5>
                                    </div>
                                    <a href="{{ $item->link }}">
                                        <button class="btn btn-outline-primary btn-outline-primary-emglow w-100">Lihat
                                            Detail</button>
                                    </a>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="skincare mt-5">
                <div class="skincare-product row row-cols-1 row-cols-md-3 g-4 justify-content-center" data-aos="fade-up">
                    @forelse ($produk as $item)
                        <div class="col-md-3 col-lg-3 col-6">
                            <a href="{{ $item->link }}">
                                <div class="card h-100">
                                    <div class="img-skincare-thumbnail">
                                        <img src="{{ asset('photo/' . $item->photo) }}" class="card-img-top" alt="Products">
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
        </div>
    </section>
@endsection
