<header>
    <nav class="navbar bg-dark justify-content-center h-100" data-bs-theme="dark">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'ms_shadow' : '' }}"
                    href="{{ route('home') }}">
                    HOME
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'ms_shadow' : '' }}{{ Route::currentRouteName() == 'comics.create' ? 'ms_shadow' : '' }}{{ Route::currentRouteName() == 'comics.show' ? 'ms_shadow' : '' }}"
                    href="{{ route('comics.index') }}">
                    COMICS
                </a>
            </li>
        </ul>
    </nav>
</header>
