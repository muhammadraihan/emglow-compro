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
            <div class="my-5 text-center title">
                Job Vacancy di eMGlow Aesthetic Centre
            </div>
            <div class="row job-vacancy">
                @foreach ($karir as $item)
                    <div class="col-6 col-md-6 col-lg-3">
                        {{-- <div class="mt-3 desc-box">
                            <div class="h3">{{ $item->name }}</div>
                            <p class="desc">{!! $item->deskripsi !!}</p>
                            <a href="{{ 'https://' . $item->link }}" class="btn btn-primary-emglow">Apply Sekarang</a>
                        </div> --}}
                        <div class="card rounded">
                            <img src="/img/wba_logo_old2.png" class="card-img-top p-4" alt="logo">
                            <div class="card-body text-center">
                                <div class="mb-4">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                </div>
                            </div>

                            <p class="text-muted">{!! $item->deskripsi !!}</p>
                            <div class="card-body text-center">
                                <a href="{{ 'https://' . $item->link }}" class="btn btn-primary-emglow w-100">Apply Sekarang</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
