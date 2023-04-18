@extends('frontend.emglow')

@section('title')
    Produk eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="store mb-5">
        <div class="header-section">
            <div class="title">Product</div>
        </div>
        <div class="container-fluid mt-5 mb-5">
            <div class="row g-2">
                <div class="col-md-9">
                    <div class="row g-2">
                        {{-- loop here --}}
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
                                        <button class="btn btn-outline-primary w-100">Lihat
                                            Detail</button>
                                    </a>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
