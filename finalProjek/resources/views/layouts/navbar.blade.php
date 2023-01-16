<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">Movie List</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/mainmenu">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/showMovieList">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewActorList">Actors</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/watchlist">Watchlist</a>
          </li>


      </li>
      @auth
      @if (Auth::user()->role =='admin' || Auth::user()->role =='member')
      <li class="nav-item">
        <a class="nav-link"
        href="{{ url('/logout') }}">Logout</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link"
        href="{{ url('/signIn') }}">Sign In</a>
      </li>
      @endif


      @endauth
      </ul>


      <ul class="ms-auto navbar-nav ">
        @guest
        <li class="nav-item">
            <a href="/signIn" class="nav-link">Login</a>
            {{-- <a href="/register" class="nav-link">Register</a> --}}

        </li>
        @endguest

        @auth
        @if (Auth::user()->role =='admin')
        <li class="nav-item">
          <a class="nav-link"
          href="{{ url('/profile') }}">Profile</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link"
          href="{{ url('/signIn') }}">Sign In</a>
        </li>
        @endif


        @endauth


      </ul>
    </div>
  </nav>
