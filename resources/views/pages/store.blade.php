@extends('frontend.emglow')

@section('title')
    Produk eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="store mb-5">
        <div class="header-section">
            <div class="title">Nama Kategori Produk</div>
        </div>
        <div class="container mt-5">
            <div class="content-store">
                <div class="row justify-content-center">
                    {{-- loop starts here --}}
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
                    {{-- loops end --}}
                </div>
            </div>
        </div>
    </section>
@endsection
