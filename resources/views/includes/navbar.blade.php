<section class="navbar-emglow">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/assets/logo.png" class="img-responsive" alt="Logo" srcset="">
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
                    <li class="nav-item"><a class="nav-link {{ request()->is('treatment') ? 'active' : '' }}"
                            href="{{ route('treatment') }}">Treatment</a></li>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('produkAll' && 'produk') ? 'active' : '' }}" data-bs-toggle="dropdown">Store</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="{{ route('produkAll') }}" class="dropdown-item">Semua</a>
                            @foreach ($kategori as $item)
                            <a href="{{ route('produk', $item->uuid)}}" class="dropdown-item">{{$item->name}}</a>
                            @endforeach
                            {{-- <a href="download.html" class="dropdown-item">Paket Haji</a> --}}
                        </div>
                    </div>
                    <li class="nav-item"><a class="nav-link {{ request()->is('dokter') ? 'active' : '' }}"
                            href="{{ route('dokter') }}">Dokter</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('cabang-klinik') ? 'active' : '' }}" href="{{ route('cabang-klinik') }}">Cabang
                            Klinik</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('reseller') ? 'active' : '' }}" href="{{ route('reseller') }}">Reseller</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('karir') ? 'active' : '' }}" href="{{ route('karir') }}">Karir</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>
