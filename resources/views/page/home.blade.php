@extends('layouts.page.app')
@section('content')
    <section>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/slider/slide_02.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/slider/slide_03.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row my-5">
                    <div class="col">
                        <div class="media">
                            <img src="{{asset('images/steps/icon_promotop1.png')}}" class="mr-3" alt="...">
                            <div class="media-body">
                                <h6 class="m-0 text-info">Interés De 24 Meses</h6>
                                <small>Gratis Solicitar interés gratis</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="media">
                            <img src="{{asset('images/steps/icon_promotop2.png')}}" class="mr-3" alt="...">
                            <div class="media-body">
                                <h6 class="m-0 text-info">Click & Collect</h6>
                                <small>Compre en línea y recoja en la tienda</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="media">
                            <img src="{{asset('images/steps/icon_promotop3.png')}}" class="mr-3" alt="...">
                            <div class="media-body">
                                <h6 class="m-0 text-info">Interés De 24 Meses</h6>
                                <small>Gratis Solicitar interés gratis</small>
                                Interés De 24 Meses
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            <div class="row">
                <div class="col has-img-category">
                    <h3 class="text-o-dark font-weight-bold">Abarrotes</h3>

                    <a href="#"><img src="https://plazavea.vteximg.com.br/arquivos/f-Abarrotes-D-14-ABR-HS-CAT5-01.png" alt="" class="w-100"></a>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <div class="bg-light shadow-sm w-100">
                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="text-o-dark font-weight-bold h5">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h3>
{{--                            <p class="card-text">PRIMOR | Código de producto: 3198</p>--}}
                            <div class="row my-3">
{{--                                <div class="col">--}}
{{--                                    <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>--}}
{{--                                </div>--}}
                                <div class="col text-secondary">
                                    <small>Precio en tienda</small>
                                    <span class="d-block"><sup>s/</sup>19.00</span>
                                </div>
                                <div class="col bg-light">
                                    <span class="text-danger font-weight-bold">Precio online</span>
                                    <span class="h5 d-block font-weight-bold text-danger"><sup>s/</sup>19.00</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block font-weight-bold btn-danger rounded-0">Pedir Ahora</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger rounded-0"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-light shadow-sm w-100">
                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="text-o-dark font-weight-bold h5">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h3>
                            {{--                            <p class="card-text">PRIMOR | Código de producto: 3198</p>--}}
                            <div class="row my-3">
                                {{--                                <div class="col">--}}
                                {{--                                    <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>--}}
                                {{--                                </div>--}}
                                <div class="col text-secondary">
                                    <small>Precio en tienda</small>
                                    <span class="d-block"><sup>s/</sup>19.00</span>
                                </div>
                                <div class="col bg-light">
                                    <span class="text-danger font-weight-bold">Precio online</span>
                                    <span class="h5 d-block font-weight-bold text-danger"><sup>s/</sup>19.00</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block font-weight-bold btn-danger rounded-0">Pedir Ahora</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger rounded-0"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-light shadow-sm w-100">
                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="text-o-dark font-weight-bold h5">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h3>
                            {{--                            <p class="card-text">PRIMOR | Código de producto: 3198</p>--}}
                            <div class="row my-3">
                                {{--                                <div class="col">--}}
                                {{--                                    <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>--}}
                                {{--                                </div>--}}
                                <div class="col text-secondary">
                                    <small>Precio en tienda</small>
                                    <span class="d-block"><sup>s/</sup>19.00</span>
                                </div>
                                <div class="col bg-light">
                                    <span class="text-danger font-weight-bold">Precio online</span>
                                    <span class="h5 d-block font-weight-bold text-danger"><sup>s/</sup>19.00</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block font-weight-bold btn-danger rounded-0">Pedir Ahora</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger rounded-0"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col text-right">
                    <a href="" class="font-weight-bold text-primary h5">Ver todo <i class="fas fa-chevron-right"></i></a>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h3 class="text-o-dark font-weight-bold">Desayunos</h3>

                    <img src="https://plazavea.vteximg.com.br/arquivos/f-Desayunos-D-14-ABR-HS-CAT1-01.png" alt="" class="w-100">

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <div class="bg-light shadow-sm w-100">
                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="text-o-dark font-weight-bold h5">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h3>
                            {{--                            <p class="card-text">PRIMOR | Código de producto: 3198</p>--}}
                            <div class="row my-3">
                                {{--                                <div class="col">--}}
                                {{--                                    <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>--}}
                                {{--                                </div>--}}
                                <div class="col text-secondary">
                                    <small>Precio en tienda</small>
                                    <span class="d-block"><sup>s/</sup>19.00</span>
                                </div>
                                <div class="col bg-light">
                                    <span class="text-danger font-weight-bold">Precio online</span>
                                    <span class="h5 d-block font-weight-bold text-danger"><sup>s/</sup>19.00</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block font-weight-bold btn-danger rounded-0">Pedir Ahora</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger rounded-0"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-light shadow-sm w-100">
                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="text-o-dark font-weight-bold h5">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h3>
                            {{--                            <p class="card-text">PRIMOR | Código de producto: 3198</p>--}}
                            <div class="row my-3">
                                {{--                                <div class="col">--}}
                                {{--                                    <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>--}}
                                {{--                                </div>--}}
                                <div class="col text-secondary">
                                    <small>Precio en tienda</small>
                                    <span class="d-block"><sup>s/</sup>19.00</span>
                                </div>
                                <div class="col bg-light">
                                    <span class="text-danger font-weight-bold">Precio online</span>
                                    <span class="h5 d-block font-weight-bold text-danger"><sup>s/</sup>19.00</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block font-weight-bold btn-danger rounded-0">Pedir Ahora</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger rounded-0"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-light shadow-sm w-100">
                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="text-o-dark font-weight-bold h5">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h3>
                            {{--                            <p class="card-text">PRIMOR | Código de producto: 3198</p>--}}
                            <div class="row my-3">
                                {{--                                <div class="col">--}}
                                {{--                                    <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>--}}
                                {{--                                </div>--}}
                                <div class="col text-secondary">
                                    <small>Precio en tienda</small>
                                    <span class="d-block"><sup>s/</sup>19.00</span>
                                </div>
                                <div class="col bg-light">
                                    <span class="text-danger font-weight-bold">Precio online</span>
                                    <span class="h5 d-block font-weight-bold text-danger"><sup>s/</sup>19.00</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block font-weight-bold btn-danger rounded-0">Pedir Ahora</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger rounded-0"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col text-right">
                    <a href="" class="font-weight-bold text-primary h5">Ver todo <i class="fas fa-chevron-right"></i></a>
                    <hr>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <h3 class="text-o-dark font-weight-bold">Parrillas</h3>

                    <a href="" class="img-animation"><img src="https://plazavea.vteximg.com.br/arquivos/f-Las-Mejores-Carnes-D-14-ABR-HS-CAT1-01.png" alt="" class="w-100"></a>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <div class="bg-light shadow-sm w-100">
                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="text-o-dark font-weight-bold h5">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h3>
                            {{--                            <p class="card-text">PRIMOR | Código de producto: 3198</p>--}}
                            <div class="row my-3">
                                {{--                                <div class="col">--}}
                                {{--                                    <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>--}}
                                {{--                                </div>--}}
                                <div class="col text-secondary">
                                    <small>Precio en tienda</small>
                                    <span class="d-block"><sup>s/</sup>19.00</span>
                                </div>
                                <div class="col bg-light">
                                    <span class="text-danger font-weight-bold">Precio online</span>
                                    <span class="h5 d-block font-weight-bold text-danger"><sup>s/</sup>19.00</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block font-weight-bold btn-danger rounded-0">Pedir Ahora</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger rounded-0"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-light shadow-sm w-100">
                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="text-o-dark font-weight-bold h5">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h3>
                            {{--                            <p class="card-text">PRIMOR | Código de producto: 3198</p>--}}
                            <div class="row my-3">
                                {{--                                <div class="col">--}}
                                {{--                                    <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>--}}
                                {{--                                </div>--}}
                                <div class="col text-secondary">
                                    <small>Precio en tienda</small>
                                    <span class="d-block"><sup>s/</sup>19.00</span>
                                </div>
                                <div class="col bg-light">
                                    <span class="text-danger font-weight-bold">Precio online</span>
                                    <span class="h5 d-block font-weight-bold text-danger"><sup>s/</sup>19.00</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block font-weight-bold btn-danger rounded-0">Pedir Ahora</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger rounded-0"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-light shadow-sm w-100">
                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="text-o-dark font-weight-bold h5">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h3>
                            {{--                            <p class="card-text">PRIMOR | Código de producto: 3198</p>--}}
                            <div class="row my-3">
                                {{--                                <div class="col">--}}
                                {{--                                    <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>--}}
                                {{--                                </div>--}}
                                <div class="col text-secondary">
                                    <small>Precio en tienda</small>
                                    <span class="d-block"><sup>s/</sup>19.00</span>
                                </div>
                                <div class="col bg-light">
                                    <span class="text-danger font-weight-bold">Precio online</span>
                                    <span class="h5 d-block font-weight-bold text-danger"><sup>s/</sup>19.00</span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block font-weight-bold btn-danger rounded-0">Pedir Ahora</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger rounded-0"><i class="fas fa-cart-plus"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col text-right">
                    <a href="" class="font-weight-bold text-primary h5">Ver todo <i class="fas fa-chevron-right"></i></a>
                    <hr>
                </div>
            </div>


        </div>
    </section>


{{--    <form-add-products></form-add-products>--}}
{{--    <cart-products-add></cart-products-add>--}}




    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="" class="brand-logos">
                        <img src="{{asset('images/brand/2-logo_brand.jpg')}}" alt="" class="w-100">
                    </a>
                </div>
                <div class="col">
                    <a href="" class="brand-logos">
                        <img src="{{asset('images/brand/3-logo_brand.jpg')}}" alt="" class="w-100">
                    </a>
                </div>
                <div class="col">
                    <a href="" class="brand-logos">
                        <img src="{{asset('images/brand/4-logo_brand.jpg')}}" alt="" class="w-100">
                    </a>
                </div>
                <div class="col">
                    <a href="" class="brand-logos">
                        <img src="{{asset('images/brand/5-logo_brand.jpg')}}" alt="" class="w-100">
                    </a>
                </div>
                <div class="col">
                    <a href="" class="brand-logos">
                        <img src="{{asset('images/brand/7-logo_brand.jpg')}}" alt="" class="w-100">
                    </a>
                </div>
            </div>
        </div>
    </section>




@stop
@push('scripts')
    <script>

    </script>
@endpush
