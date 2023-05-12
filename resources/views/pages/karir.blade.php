@extends('frontend.emglow')

@section('title')
    Karir | eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="karir">
        <div class="header-section">
            <div class="padding-karir"></div>
            {{-- <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum officia ut minus!</p> --}}
        </div>
        <div class="container">
            <div class="my-5 text-center title">
                Job Vacancy di eMGlow Aesthetic Centre
            </div>
            <div class="row">
                @foreach ($karir as $item)
                    <div class="col-12 col-md-4 col-lg-6">
                        {{-- <div class="img-reseller">
                            <img src="{{ asset('photo/' . $item->photo) }}" alt="Foto" class="w-100">
                        </div> --}}
                        <div class="mt-3 desc-box">
                            <div class="h3">{{ $item->name }}</div>
                            <p class="desc">{!! $item->deskripsi !!}</p>
                            <a href="{{ 'https://'.$item->link }}" class="btn btn-primary-emglow">Apply Sekarang</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
