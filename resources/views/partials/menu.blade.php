<ul id="js-nav-menu" class="nav-menu">
    <li>
        <a href="{{route('backoffice.dashboard')}}" title="Dashboard" data-filter-tags="dashboard">
            <i class="fal fa-desktop"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{route('promo.index')}}" title="Promo" data-filter-tags="Promo">
            <i class="fal fa-dollar-sign"></i>
            <span class="nav-link-text">Promo</span>
        </a>
    </li>
    <li>
        <a href="{{route('about.index')}}" title="About" data-filter-tags="About">
            <i class="fal fa-exclamation-circle"></i>
            <span class="nav-link-text">About</span>
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
        <a href="#" title="Media" data-filter-tags="Media">
            <i class="fal fa-home"></i>
            <span class="nav-link-text">Master Data</span>
        </a>
        <ul>
            <li>
                <a href="{{route('logo.index')}}" title="Logo" data-filter-tags="logo">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text">Logo</span>
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