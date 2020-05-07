<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orion</title>

    <link rel="stylesheet" href="{{mix("css/app.css")}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<div id="app">
<header>
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between ">
                <div class="col">
                    <small class="text-muted">Welcome visitor you can <a href="/login">Iniciar sesión</a> or <a href="/register">Create an account</a></small>
                </div>
                <div class="col text-right">
                    <small class="text-muted">Llámanos al <a href="" class="font-weight-bold">00 123456789</a></small>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <a href="/"><img src="{{asset('images/descarga.jpg')}}" alt="logo orion" class="w-100 p-3"></a>
                </div>
                <div class="col">
                    <a href="" class="bg-dark">
                        <div class="row no-gutters align-items-center justify-content-center">
                            <div class="col-auto text-right shadow-sm rounded bg-primary">
                                <a href="http://190.117.145.74/BSEFact.Orion" target="_blank" class="stretched-link text-decoration-none font-weight-bold img-animation text-white"><span class="px-3">Consulte su factura electrónica o comprobante electrónico</span> <img src="{{asset('images/La-factura-electronica-un-paso-hacia-la-transformacion-digital-700x350.png')}}" alt="" class="rounded-right shadow-sm" width="90"></a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Mis compras</b> <small>0 productos</small>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>

        <div class="collapse navbar-collapse"  id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li> <a class="nav-link text-warning" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-bars" aria-hidden="true"></i> Categorias</a></li>
                <li> <a class="nav-link" href="{{route('category_index_path', 'abarrotes')}}">  Frutas y Verduras</a></li>


                <li>
                    <a class="nav-link" href="{{route('category_index_path', 'abarrotes')}}"> Carnes y Aves </a>
                </li>


                <li>
                    <a class="nav-link" href="{{route('category_index_path', 'abarrotes')}}"> Abarrotes </a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('category_index_path', 'abarrotes')}}"> Licores y Vinos</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('category_index_path', 'abarrotes')}}"> Hogar y Bazar</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('category_index_path', 'abarrotes')}}"> Limpieza</a>
                </li>

                <li>
                    <a class="nav-link" href="{{route('category_index_path', 'abarrotes')}}"> Televisores </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
@include('layouts.page.menu-pop')

@yield('content')

<footer class="bg-dark">
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-7 text-center">
                <form>
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <span class="font-weight-bold text-white">INSCRÍBASE AL BOLETÍN</span>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" id="inputPassword2" placeholder="su dirección de correo electrónico">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Suscribir</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
</div>
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col">--}}
{{--                @foreach($products as $product)--}}
{{--                    <div class="card" style="width: 18rem;">--}}
{{--                        <img class="card-img-top" src="{{$product->pic}}" alt="Card image cap">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">{{$product->name}}</h5>--}}
{{--                            <p class="card-text">{{$product->desc}}</p>--}}
{{--                            <a class="btn btn-primary" href="#"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                   document.getElementById('newbill-form{{$product->id}}').submit();">--}}
{{--                                Buy RM {{$product->price}}--}}
{{--                            </a>--}}
{{--                            <form id="newbill-form{{$product->id}}" action="{{ route('purchase_store_path') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" name="product" value="{{$product->id}}">--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--    --}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 0,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

</body>
</html>
