<header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="/front/images/version/market-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories.single', ['slag' => 'marketing']) }}">Marketing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories.single', ['slag' => 'make-money']) }}">Make Money</a>
                            </li>
                            @guest
                            <li>
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('register.create') }}">Registration</a>
                            </li>
                            @endguest

                            @auth
                            <li>
                                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                            </li>
                            <li>
                                <h4 class="ml-5 mt-3 text-danger">Hello  {{ auth()->user()->name }}</h4>
                            </li>
                            @endauth
                        </ul>
                        <form class="form-inline" method="get" action="{{ route('search') }}">
                            <input name="search" class="form-control mr-sm-2 @error('search') is-invalid @enderror " type="text" placeholder="How may I help?" required>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <style>
                            .market-header .form-inline .is-invalid{
                                border: 2px solid red;
                            }
                        </style>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
