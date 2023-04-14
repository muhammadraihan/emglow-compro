@extends('frontend.emglow')

@section('title')
    Treatment eMGlow Aesthetic Centre
@endsection

@section('content')
    <section class="cabang-klinik">
        <div class="header-section">
            <div class="title">Nama Kategori</div>
        </div>
        <div class="container mt-5">
            <div class="content-treatment">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10 treatment-card rounded-3 mb-4" data-aos="fade-up-right" data-aos-delay="100">
                        {{-- loop starts here --}}
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
                        {{-- End Loop --}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
