<section class="navbar-emglow">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="assets/logo.png" class="w-100 img-responsive" alt="Logo" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                            aria-current="page" href="{{ route('landing') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">Tentang Kami</a></li>
                    {{-- <li class="nav-item"><a class="nav-link {{ request()->is('treatment') ? 'active' : '' }}"
                            href="{{ route('treatment') }}">Treatment</a></li> --}}
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Treatments</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="#" class="dropdown-item">Kategori A</a>
                            <a href="#" class="dropdown-item">Kategori B</a>
                            <a href="#" class="dropdown-item">Kategori C</a>
                            <a href="#" class="dropdown-item">Kategori D</a>
                        </div>
                    </div>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="#" class="dropdown-item">Kategori A</a>
                            <a href="#" class="dropdown-item">Kategori B</a>
                            <a href="#" class="dropdown-item">Kategori C</a>
                            <a href="#" class="dropdown-item">Kategori D</a>
                        </div>
                    </div> --}}
                    <li class="nav-item"><a class="nav-link {{ request()->is('store') ? 'active' : '' }}"
                            href="{{ route('store') }}">Store</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('dokter') ? 'active' : '' }}"
                            href="{{ route('dokter') }}">Dokter</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="#">Reseller</a></li>
                    <li class="nav-item"><a class="btn btn-primary-emglow" href="{{ route('cabang-klinik') }}">Cabang
                            Klinik</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>
