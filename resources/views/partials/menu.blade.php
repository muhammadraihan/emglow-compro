<ul id="js-nav-menu" class="nav-menu">
    <li>
        <a href="{{route('backoffice.dashboard')}}" title="Dashboard" data-filter-tags="dashboard">
            <i class="fal fa-desktop"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{route('cabang.index')}}" title="Cabang" data-filter-tags="Cabang">
            <i class="fal fa-warehouse"></i>
            <span class="nav-link-text">Cabang</span>
        </a>
    </li>
    <li>
        <a href="{{route('dokter.index')}}" title="dokter" data-filter-tags="dokter">
            <i class="fal fa-user"></i>
            <span class="nav-link-text">Dokter</span>
        </a>
    </li>
    <li>
    <li>
        <a href="{{route('promo.index')}}" title="Promo" data-filter-tags="Promo">
            <i class="fal fa-bullhorn"></i>
            <span class="nav-link-text">Promo</span>
        </a>
    </li>
    <li>
        <a href="#" title="Media" data-filter-tags="Media">
            <i class="fal fa-box"></i>
            <span class="nav-link-text">Produk</span>
        </a>
        <ul>
            <li>
                <a href="{{route('produk_kategori.index')}}" title="Product Categories" data-filter-tags="Product Categories">
                    <i class="fal fa-cubes"></i>
                    <span class="nav-link-text">Product Categories</span>
                </a>
            </li>
            <li>
                <a href="{{route('produk.index')}}" title="Produk" data-filter-tags="Produk">
                    <i class="fal fa-box"></i>
                    <span class="nav-link-text">Produk</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" title="Media" data-filter-tags="Media">
            <i class="fal fa-user-md"></i>
            <span class="nav-link-text">Treatment</span>
        </a>
        <ul>
            <li>
                <a href="{{route('treatment_kategori.index')}}" title="Treatment Categories" data-filter-tags="Treatment Categories">
                    <i class="fal fa-users"></i>
                    <span class="nav-link-text">Treatment Categories</span>
                </a>
            </li>
            <li>
                <a href="{{route('treatment.index')}}" title="Treatment" data-filter-tags="Treatment">
                    <i class="fal fa-user-md"></i>
                    <span class="nav-link-text">Treatment</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{route('reseller.index')}}" title="Reseller" data-filter-tags="Reseller">
            <i class="fal fa-sitemap"></i>
            <span class="nav-link-text">Reseller</span>
        </a>
    </li>
    <li>
        <a href="{{route('karir.index')}}" title="Karir" data-filter-tags="Karir">
            <i class="fal fa-handshake"></i>
            <span class="nav-link-text">Karir</span>
        </a>
    </li>
    <li>
        <a href="{{route('edukasi.index')}}" title="Edukasi" data-filter-tags="Edukasi">
            <i class="fal fa-graduation-cap"></i>
            <span class="nav-link-text">Edukasi</span>
        </a>
    </li>
    <li>
        <a href="#" title="Media" data-filter-tags="Media">
            <i class="fal fa-home"></i>
            <span class="nav-link-text">Master Data</span>
        </a>
        <ul>
            <li>
                <a href="{{route('about.index')}}" title="About" data-filter-tags="About">
                    <i class="fal fa-exclamation-circle"></i>
                    <span class="nav-link-text">About</span>
                </a>
            </li>
            <li>
                <a href="{{route('home.index')}}" title="Home" data-filter-tags="Home">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text">Home</span>
                </a>
            </li>
            <li>
                <a href="{{route('youtube.index')}}" title="Youtube" data-filter-tags="youtube">
                    <i class="fal fa-caret-circle-right"></i>
                    <span class="nav-link-text">Link Youtube</span>
                </a>
            </li>
            <li>
                <a href="{{route('logo.index')}}" title="Logo" data-filter-tags="logo">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text">Logo</span>
                </a>
            </li>
            <li>
                <a href="{{route('penghargaan.index')}}" title="Penghargaan" data-filter-tags="Penghargaan">
                    <i class="fal fa-trophy-alt"></i>
                    <span class="nav-link-text">Penghargaan</span>
                </a>
            </li>
            <li>
                <a href="{{route('socialMedia.index')}}" title="Social Media" data-filter-tags="Social Media">
                    <i class="fal fa-tablet-alt"></i>
                    <span class="nav-link-text">Social Media</span>
                </a>
            </li>
        </ul>
    </li>
    @isset($menu)
    @foreach ($menu as $parent_menu)
    <li class="">
        <a href="{{$parent_menu->route_name ? route($parent_menu->route_name): '#'}}"
            title="{{$parent_menu->menu_title ? $parent_menu->menu_title:''}}">
            <i class="{{$parent_menu->icon_class ? $parent_menu->icon_class:''}}"></i>
            <span class="nav-link-text">{{$parent_menu->menu_title ?$parent_menu->menu_title:''}}</span>
        </a>
        @if (count($parent_menu->childs))
        <ul>
            @include('partials.submenu',['submenu' => $parent_menu->childs])
        </ul>
        @endif
    </li>
    @endforeach
    @endisset
</ul>