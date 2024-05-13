@extends('frontend.emglow')

@section('title')
    Karir | eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="karir">
        <div class="header-section">
            <div class="padding-karir"></div>
        </div>
        <div class="container">
            <h1 class="my-5 text-center fw-bold text-white">
                Job Vacancy di eMGlow Aesthetic Centre
            </h1>
            <div class="row job-vacancy">
                @foreach ($karir as $item)
                    <div class="col-6 col-md-6 col-lg-3">
                        <div class="card rounded">
                            <img src="/img/wba_logo_old2.png" class="card-img-top p-4" alt="logo">
                            <div class="card-body text-center">
                                <div class="mb-4">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                </div>
                            </div>


                            <div class="color-black p-2">{!! $item->deskripsi !!}</div>
                            <div class="card-body text-center">
                                <a href="{{ 'https://' . $item->link }}" class="btn btn-primary-emglow w-100">Apply
                                    Sekarang</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
