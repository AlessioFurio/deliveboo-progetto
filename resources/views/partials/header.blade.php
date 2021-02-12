<header>
    <div class="header-top">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>

        <nav>
            <div class="">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>
    </div>

    <div class="header-bottom">
        <nav class="container">
            <ul class="nav-menu">
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Categoria</a></li>
                <li><a href="#">Categoria</a></li>
            </ul>
        </nav>
    </div>


</header>
