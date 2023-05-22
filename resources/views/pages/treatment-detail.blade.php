@extends('frontend.emglow')

@section('title')
    Treatment eMGlow
@endsection

@section('content')
    <section class="treatment-detail">
        <div class="container">
            <div class="content-about mt-5">
                <div class="container my-5">
                    <div class="row">
                        @foreach ($result as $item)
                            <div class="col-md-5">
                                <div class="main-img">
                                    <img class="img-fluid" src="{{ asset('photo/' . $item->photo) }}"
                                        alt="ProductS">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="main-description px-2">
                                    <div class="category text-bold color-gold">
                                        Category:
                                    </div>
                                    <div class="product-title text-bold my-3">
                                        {{ $item->name }}
                                    </div>
                                    <div class="buttons d-flex">
                                        <div class="block">
                                            @foreach ($about as $item)
                                                <a href="{{ 'http://wa.me/' . $item->no_tlp }}" target="_blank" class="btn btn-primary-emglow">Jadwalkan
                                                    Sekarang</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details my-4">
                                    <p class="details-title text-color mb-1">Deskripsi</p>
                                    <p class="description color-white">
                                        {{ $item->deskripsi }}
                                    </p>
                                </div>

                                <div class="row questions bg-dark p-3">
                                    <div class="col-md-1 icon">
                                        <i class="fa-brands fa-rocketchat questions-icon"></i>
                                    </div>
                                    <div class="col-md-11 text">
                                        Punya pertanyaan terkait perawatan ini? Jangan khawatir, silahkan tanyakan dahulu kepada
                                        customer service kami untuk mendapatkan pelayanan terbaik.
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
