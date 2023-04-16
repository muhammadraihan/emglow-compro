@extends('frontend.emglow')

@section('title')
    Treatment eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="emglow-treatment">
        <div class="header-section">
            <div class="title">Nama Kategori</div>
        </div>
        <div class="container mt-5">
            <div class="container similar-products my-4">
                <div class="row">
                    @foreach ($treatment as $item)
                        <div class="col-12 col-md-4 col-lg-6">
                            <div class="similar-product">
                                <img class="w-100" src="{{ asset('photo/' . $item->photo) }}" alt="Preview">
                                <p class="title">{{ $item->name }}</p>
                                <div class="text-muted mb-4">{!! $item->deskripsi !!}</div>
                                <a href="{{ route('treatment-detail', $item->uuid)}}" class="btn btn-outline-emglow">Lihat Detail</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- <div class="content-treatment">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10 treatment-card rounded-3 mb-4" data-aos="fade-up-right" data-aos-delay="100">
                        <div class="row bg-white justify-content-center align-items-center py-3 px-1 border rounded">
                            <div class="col-md-7 rounded-2">
                                <img class="img-fluid img-responsive rounded product-image"
                                    src="/assets/Crystal Skin IPL Infusion.png" alt="Treatment">
                            </div>
                            <div class="col-md-5 mt-2">
                                <h5>Crystal Skin IPL Infusion</h5>
                                <p class="text-justify para mb-0">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio reiciendis,
                                    accusamus eveniet suscipit, illo totam repudiandae voluptatem vero, facilis modi quam
                                    quo. Eaque, inventore, consectetur necessitatibus nobis eum quae laboriosam pariatur
                                    amet exercitationem animi quidem ducimus molestiae
                                </p>
                                <div class="d-flex flex-column mt-4"><button class="btn btn-primary-emglow btn-sm"
                                        type="button">Book
                                        Now</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
@endsection
