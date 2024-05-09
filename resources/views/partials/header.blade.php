<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <h4 class="navbar-brand">Laravel Media</h4>


            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link {{ Route::currentRouteName() === 'index' ? 'nav-active' : '' }}"
                        href="{{ route('index') }}" aria-current="page">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'series' ? 'nav-active' : '' }}"
                        href="{{ route('series') }}" aria-current="page">Series</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() === 'anime' ? 'nav-active' : '' }}"
                        href="{{ route('anime') }}" aria-current="page">Anime</a>
                </li>
            </ul>

        </div>
    </nav>
</header>
