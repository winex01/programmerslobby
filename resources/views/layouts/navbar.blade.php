<nav class="navbar py-0 navbar-expand-sm navbar-light bg-light fixed-top py-md-0">
    <a class="navbar-brand text-muted" href="{{ route('home') }}">ProgrammersLobby</a>
    <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="navbar-collapse collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        </ul>

        <form class="mx-2 my-auto d-inline w-25">
            <input class="form-control form-control-sm" type="search" placeholder="Search..." aria-label="Search">
        </form>

        <a class="ml-2 text-muted" href="#">Login</a>
        <a class="ml-2 btn btn-outline-primary btn-sm my-2 my-sm-0" href="#">Sign up</a>
    </div>
</nav>