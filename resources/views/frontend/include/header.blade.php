<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-commerce</title>
</head>
<body>
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{asset('css/index.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="images/favicon.png" rel="icon">



<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<div class="bd-example">
    <div class="row" style="background: deeppink">
        <div class="col"><span>e-commerce</span></div>
        <div class="col mr-auto"><span><i class="bi bi-whatsapp">   01123281471</i></span></div>
    </div>

<div class="row">



    <nav class=" navbar navbar-expand-lg navbar-dark  bg-primary">
        <div class="container-fluid ">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse col-md-4" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category">Category</a>
                    </li>

                    <li class="nav-item mr-5">
                        <a class="nav-link " href="/shop" >Shop</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link " href="/about" >Abut Us</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link " href="/contact" >Contact Us</a>
                    </li>
                </ul>

                    @if (Auth::user())
                    <ul>
                    <li class="nav-item ml-5"><a style="color: rgb(148, 53, 73)" href="/carts" > <h1 class=""><i class=" bi bi-cart-check-fill"></i></h1></a></li>
                    @endif
                </ul>

                    <form class="d-flex" method="get" action="/results">
                        <input class="form-control me-2" name="search" type="search" required placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>

                <ul class="navbar-nav mr-5">

                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               <img style="width:60px;border-redies:50%; height:60px;" src="{{ Auth::user()->avatar }}"> {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a href="/profile/edit/{id}" class="dropdown-item">Profile</a>
                            </div>

                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
</div>
</div>
</div>

<div>
