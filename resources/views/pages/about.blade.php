@extends('frontend.emglow')

@section('title')
    Tentang eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="about">
        <div class="header-section">
                <div class="title">
                    Tentang eMGlow Aesthetics Centre
                </div>
                @foreach ($about as $item)
                    {{-- <p>No.telephone</p>
                    <p>{{ $item->no_tlp }}</p>
                    {{ asset('photo/' . $item->photo) }} --}}
                @endforeach
            </div>
        <div class="container">
            <div class="content-about mt-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-8 text-center mb-5">
                        <h1>Visi</h1>
                        <p>{!! $item->visi !!}</p>
                    </div>
                    <div class="col-12 col-md-8 mb-5 text-center">
                        <h1>Misi</h1>
                        <p>{!! $item->misi !!}</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-5 mb-4">
                        <img src="/assets/dokmar-testi.png" alt="" class="w-100">
                    </div>
                    <div class="col-12 col-md-5 history">
                        <h1>Sejarah</h1>
                        {!! $item->sejarah !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
