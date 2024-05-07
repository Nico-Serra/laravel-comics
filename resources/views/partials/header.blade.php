<header>

    <div class="bg-primary py-2">
    </div>

    <nav class="nav justify-content-between align-items-center container my-4">
        <a href="/"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="" class="w-75"></a>

        <div class="d-flex">
            <a class="nav-link {{Route::currentRouteName() === 'home' ? 'nav-active' : ''}} py-4 text-dark text-uppercase " href="/">Homepage</a>
            <a class="nav-link {{Route::currentRouteName() === 'first' ? 'nav-active' : ''}} py-4 text-dark text-uppercase" href="/firstComic">first Comic</a>
            <a class="nav-link {{Route::currentRouteName() === 'last' ? 'nav-active' : ''}} py-4 text-dark text-uppercase" href="/lastComic">last Comic</a>
        </div>

        <div class="border-bottom border-primary text-end">
            <input type="text" class="border-0 text-end no_outline" placeholder="Search">
            <a href="" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg></a>
        </div>
    </nav>

  

</header>