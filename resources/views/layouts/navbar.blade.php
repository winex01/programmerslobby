<nav class="navbar py-0 navbar-expand-sm navbar-light bg-light fixed-top py-md-0">
    {{-- <a class="navbar-brand text-muted" href="{{ route('home') }}">ProgrammersLobby</a> --}}
    <a class="navbar-brand text-muted" href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>
        {{ config('app.name') }}
    </a>
    <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="navbar-collapse collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        </ul>

        {{-- search box --}}
        <form class="mx-2 my-auto d-inline w-50">
            <input class="form-control form-control-sm" type="search" placeholder="Search..." aria-label="Search">
        </form>

        
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link text-muted" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="btn btn-outline-primary btn-sm mt-1 mb-1" href="{{ route('register') }}">{{ __('Signup') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>