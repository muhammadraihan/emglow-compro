@extends('frontend.emglow')

@section('title')
    Cabang Klinik eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="cabang-klinik">
        <div class="header-section">
            <h1 class="text-white fw-bold">Cabang Klinik</h1>
        </div>
        <div class="container mt-5">
            <div class="content-cabang">
                {{-- loop starts here --}}
                @foreach ($cabang as $item)
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 text-center">
                        <img src="{{ asset('photo/' . $item->photo) }}" alt="" class="w-100 rounded">
                        <div class="details mt-4 mb-4">
                            <h1 class="color-gold">{{ $item->name }}</h1>
                            <div class="detail small text-muted mb-4 color-white">{{ $item->alamat }}</div>
                            <div class="alamat mb-2 color-white">{{ $item->detail }}</div>
                            <div class="contact">
                                <a href="{{ 'https://wa.me/'.$item->no_tlp }}" class="btn btn-primary-emglow">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- end loop --}}
            </div>
        </div>
    </section>
@endsection
