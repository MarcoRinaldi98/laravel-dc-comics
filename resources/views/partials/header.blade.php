<header>
    <nav class="navbar bg-dark justify-content-center h-100" data-bs-theme="dark">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'ms_select' : '' }}"
                    href="{{ route('home') }}">
                    {{ $navbarText[0] }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'ms_select' : '' }}{{ Route::currentRouteName() == 'comics.create' ? 'ms_select' : '' }}{{ Route::currentRouteName() == 'comics.show' ? 'ms_select' : '' }}"
                    href="{{ route('comics.index') }}">
                    {{ $navbarText[1] }}
                </a>
            </li>
        </ul>
    </nav>
</header>
