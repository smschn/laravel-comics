<header class="containerWidth">
    <div>
        <img src="{{asset('images/dc-logo.png')}}" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href={{url('/')}}>HOMEPAGE</a></li>
            <li><a href={{route('characters')}}>CHARACTERS</a></li>
            <li><a href={{route('comics')}}>COMICS</a></li>
            <li><a href={{route('movies')}}>MOVIES</a></li>
            <li><a href={{route('tv')}}>TV</a></li>
            <li><a href={{route('games')}}>GAMES</a></li>
            <li><a href={{route('collectibles')}}>COLLECTIBLES</a></li>
            <li><a href={{route('videos')}}>VIDEOS</a></li>
            <li><a href={{route('fans')}}>FANS</a></li> <!-- come url della pagina uso il nome dato alla sua ROUTE -->
            <li><a href={{url('/news')}}>NEWS</a></li> <!-- prendo direttamente l'url della pagina -->
            <li><a href={{url('/shop')}}>SHOP</a></li>
        </ul>
    </nav>
</header>
<section id="jumbotron">
    <div class="series_box">
        CURRENT SERIES
    </div>
</section>