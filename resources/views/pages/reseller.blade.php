@extends('frontend.emglow')

@section('title')
    Reseller | eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="reseller">
        <div class="header-section">
            <div class="title">
                Tertarik Menjadi Reseller eMGlow?
            </div>
            {{-- <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum officia ut minus!</p> --}}
        </div>
        <div class="row justify-content-center my-4">
            <div class="col-6 col-md-4">
                @foreach ($reseller as $item)
                    <a href="{{ 'https://wa.me/'.$item->telephone }}" class="btn btn-primary-emglow w-100">Join Reseller</a>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="my-5 text-center title">
                Daftar Reseller eMGlow Aesthetics Centre
            </div>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-6">
                    @foreach ($reseller as $item)
                        <div class="img-reseller">
                            <img src="{{ asset('photo/' . $item->photo) }}" alt="Foto" class="w-100">
                        </div>
                        <div class="mt-3 desc-box">
                            <div class="h3">Nama Wilayah</div>
                            <p class="desc">{!! $item->wilayah_reseller !!}</p>
                            <div class="telp"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-telephone-forward-fill me-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
                            </svg> <a href="{{ 'https://wa.me/'.$item->telephone }}">{{ $item->telephone }}</div></a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
