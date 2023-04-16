@extends('frontend.emglow')

@section('title')
    Cabang Klinik eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="cabang-klinik">
        <div class="header-section">
            <div class="title">Cabang Klinik</div>
        </div>
        <div class="container mt-5">
            <div class="content-cabang">
                {{-- loop starts here --}}
                @foreach ($cabang as $item)
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center">
                        <h1 class="mb-4">{{ $item->name }}</h1>
                        <img src="{{ asset('photo/' . $item->photo) }}" alt="" class="w-100 rounded">
                        <div class="details mt-4 mb-4">
                            <div class="detail small text-muted mb-4">{{ $item->alamat }}</div>
                            <div class="alamat mb-2">{{ $item->detail }}</div>
                            <div class="contact">{{ $item->no_tlp }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- end loop --}}
            </div>
        </div>
    </section>
@endsection
