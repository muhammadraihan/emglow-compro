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
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center">
                        <h1 class="mb-4">Cabang A</h1>
                        <img src="/assets/Complete Pico Biaxis_Laser Full Face.png" alt="" class="w-100 rounded">
                        <div class="details mt-4 mb-4">
                            <div class="detail small text-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Magnam
                                enim, reiciendis ab laborum officiis vero, qui at saepe doloremque expedita soluta, velit
                                voluptas labore. Quos, recusandae!</div>
                            <div class="alamat mb-2">Jl. Indonesia</div>
                            <div class="contact">0812344556</div>
                        </div>
                    </div>
                </div>
                {{-- end loop --}}
            </div>
        </div>
    </section>
@endsection
