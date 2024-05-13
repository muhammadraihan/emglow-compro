@extends('frontend.emglow')

@section('title')
    Dokter eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="dokter">
        <div class="header-section">
            <h1 class="text-white fw-bold">Dokter di eMGlow Aesthetics Centre</h1>
        </div>
        <div class="container mt-5">
            <div class="content-dokter">
                <div class="row">
                    @foreach ($dokter as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="team-member">
                                <div class="team-img" style="background-image: url('{{ asset('photo/' . $item->photo) }}')">
                                </div>
                            </div>
                            <div class="team-title">
                                <h5 class="mb-2 color-gold">{{ $item->name }}</h5>
                                <div class="subtitle text-uppercase color-white">{{ $item->Cabang->name }}</div>
                                <div class="subtitle color-white">{!! $item->jadwal !!}</div>
                                <div class="subtitle mt-4 color-white">{!! $item->deskripsi !!}</div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
