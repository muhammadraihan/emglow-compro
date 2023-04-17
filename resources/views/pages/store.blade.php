@extends('frontend.emglow')

@section('title')
    Produk eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="store mb-5">
        {{-- <div class="container mt-5">
            <div class="content-store">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4 p-4 border rounded me-2 mb-2">
                        <div class="container-product">
                            <div class="photo-product" style="background-image: url('/assets/sunscreen.png')"></div>
                        </div>
                        <div class="description">
                            <div class="title">Nama Produk</div>
                            <div class="subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                                excepturi repellat debitis commodi, facilis adipisci doloremque quia non nemo porro sed
                                eius? Dolore temporibus autem atque, quis ipsa ratione suscipit odit deleniti voluptatibus
                                fuga facilis voluptas?</div>
                            <a href="#" class="btn btn-primary-emglow w-100">Order</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 p-4 border rounded me-2 mb-2">
                        <div class="container-product">
                            <div class="photo-product" style="background-image: url('/assets/sunscreen.png')"></div>
                        </div>
                        <div class="description">
                            <div class="title">Nama Produk</div>
                            <div class="subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                                excepturi repellat debitis commodi, facilis adipisci doloremque quia non nemo porro sed
                                eius? Dolore temporibus autem atque, quis ipsa ratione suscipit odit deleniti voluptatibus
                                fuga facilis voluptas?</div>
                            <a href="#" class="btn btn-primary-emglow w-100">Order</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 p-4 border rounded me-2 mb-2">
                        <div class="container-product">
                            <div class="photo-product" style="background-image: url('/assets/sunscreen.png')"></div>
                        </div>
                        <div class="description">
                            <div class="title">Nama Produk</div>
                            <div class="subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                                excepturi repellat debitis commodi, facilis adipisci doloremque quia non nemo porro sed
                                eius? Dolore temporibus autem atque, quis ipsa ratione suscipit odit deleniti voluptatibus
                                fuga facilis voluptas?</div>
                            <a href="#" class="btn btn-primary-emglow w-100">Order</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 p-4 border rounded me-2 mb-2">
                        <div class="container-product">
                            <div class="photo-product" style="background-image: url('/assets/sunscreen.png')"></div>
                        </div>
                        <div class="description">
                            <div class="title">Nama Produk</div>
                            <div class="subtitle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia
                                excepturi repellat debitis commodi, facilis adipisci doloremque quia non nemo porro sed
                                eius? Dolore temporibus autem atque, quis ipsa ratione suscipit odit deleniti voluptatibus
                                fuga facilis voluptas?</div>
                            <a href="#" class="btn btn-primary-emglow w-100">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container-fluid mt-5 mb-5">
            <div class="row g-2">
                <div class="col-md-3">
                    <div class="processor p-4">
                        <div class="heading d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase">Koleksi</h6>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <a href="#" class="btn btn-link">Semua</a>
                        </div>
                        @foreach ($produk as $item)
                            <div class="d-flex justify-content-between mt-2">
                                <a href="#" class="btn btn-link">{{ $item->Categories->name }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row g-2">
                        {{-- loop here --}}
                        <div class="col-md-4">
                            <a href="#">
                                <div class="product p-4">
                                    <div class="text-center">
                                        <img src="/assets/sunscreen.png" width="160">
                                    </div>
                                    <div class="about">
                                        <h5>Sunscreen</h5>
                                    </div>
                                    <a href="#">
                                        <button class="btn btn-outline-primary w-100 mt-3">Lihat
                                            Detail</button>
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
