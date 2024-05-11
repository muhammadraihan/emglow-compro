@extends('frontend.emglow')

@section('title')
    Tentang eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="about">
        <div class="header-section">
                <h1 class="text-white fw-bold">
                    Tentang eMGlow Aesthetics Centre
                </h1>
            </div>
        <div class="container">
            <div class="content-about mt-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-8 text-center mb-5">
                        <h1 class="color-gold">Visi</h1>
                        <p>{!! $item->visi !!}</p>
                    </div>
                    <div class="col-12 col-md-8 mb-5 text-center">
                        <h1 class="color-gold">Misi</h1>
                        <p>{!! $item->misi !!}</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-5 mb-4">
                        <img src="/img/alat.png" alt="" class="w-100">
                    </div>
                    <div class="col-12 col-md-5 history">
                        <h1 class="color-gold">Sejarah</h1>
                        {!! $item->sejarah !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
