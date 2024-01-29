<div class="info-page">
  <p>Dc power Visa</p>
  <p>Additional Dc Sites</p>
</div>
<header>
  <div class="cont-logo">
    <a href="{{route('home')}}"><img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt=""></a>
  </div>
  <nav>
    <ul>
      <li><a class="{{Route::currentRouteName() == 'Characters' ? 'active' : ''}}" href="{{ route('Characters') }}">Characters</a></li>
      <li><a class="{{Route::currentRouteName() == 'Movies' ? 'active' : ''}}" class="" href="{{ route('Movies') }}">Movies</a></li>
      <li><a class="{{Route::currentRouteName() == 'Tv' ? 'active' : ''}}" href="{{ route('Tv') }}">Tv</a></li>
      <li><a class="{{Route::currentRouteName() == 'Games' ? 'active' : ''}}" href="{{ route('Games') }}">Games</a></li>
      <li><a class="{{Route::currentRouteName() == 'Collectibles' ? 'active' : ''}}" href="{{ route('Collectibles') }}">Collectibles</a></li>
      <li><a class="{{Route::currentRouteName() == 'Fans' ? 'active' : ''}}" href="{{ route('Fans') }}">Fans</a></li>
      <li><a class="{{Route::currentRouteName() == 'Videos' ? 'active' : ''}}" href="{{ route('Videos') }}">Videos</a></li>
      <li><a class="{{Route::currentRouteName() == 'News' ? 'active' : ''}}" href="{{ route('News') }}">News</a></li>
      <li><a class="{{Route::currentRouteName() == 'Shop' ? 'active' : ''}}" href="{{ route('Shop') }}">Shop</a></li>
    </ul>
  </nav>
  <div class="search-bar">
    <input type="text" placeholder="Search">
  </div>
</header>