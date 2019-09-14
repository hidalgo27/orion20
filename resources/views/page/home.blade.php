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
            <div class="row mb-4 no-gutters">
                <div class="col-3 d-flex">
                    <img src="{{asset('images/category/cat_tab2.jpg')}}" alt="" class="w-100">
                </div>
                <div class="col-1 d-flex bg-dark text-center">
                    <h5 class="align-self-center text-white title_block">Abarrotes</h5>
                </div>
                <div class="col-8">
                    <div class="card rounded-0">
                        <div class="card-body p-3">
                            <div class="row slider-products mb-3 d-flex">
                                <div class="col d-flex">
                                    <div class="card d-flex">
                                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h5>
                                            <p class="card-text">PRIMOR | Código de producto: 3198</p>
                                            <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>
                                            <small class="font-weight-bold text-danger">Online</small>
                                            <p class="card-text"><small class="text-muted">Todo medio de pago</small> <span class="float-right font-weight-bold text-danger"> S/.5.00 </span></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block btn-danger">Pedir Ahora</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-danger"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card d-flex">
                                        <img src="{{asset('images/products/Linguini-Grosso-Nro-42-Don-Vittorio-Bolsa-500-g-11113.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Fettuccini Don Vittorio 500 g</h5>
                                            <p class="card-text">DON VITTORIO | Código de producto: 705358</p>
                                            <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>
                                            <small class="font-weight-bold text-danger">Online</small>
                                            <p class="card-text"><small class="text-muted">Todo medio de pago</small> <span class="float-right font-weight-bold text-danger"> S/.5.00 </span></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block btn-danger">Pedir Ahora</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-danger"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card d-flex">
                                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Aceite Vegetal Primor Premium Botella 1 L</h5>
                                            <p class="card-text">PRIMOR | Código de producto: 3198</p>
                                            <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>
                                            <small class="font-weight-bold text-danger">Online</small>
                                            <p class="card-text"><small class="text-muted">Todo medio de pago</small> <span class="float-right font-weight-bold text-danger"> S/.5.00 </span></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block btn-danger">Pedir Ahora</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-danger"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card d-flex">
                                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Aceite Vegetal Primor Premium Botella 1 L</h5>
                                            <p class="card-text">PRIMOR | Código de producto: 3198</p>
                                            <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>
                                            <small class="font-weight-bold text-danger">Online</small>
                                            <p class="card-text"><small class="text-muted">Todo medio de pago</small> <span class="float-right font-weight-bold text-danger"> S/.5.00 </span></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block btn-danger">Pedir Ahora</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-danger"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <a href="" class="img-animation"><img src="{{asset('images/banners/banner_topcolumn.jpg.png')}}" alt="" class="w-100"></a>
                </div>
            </div>

            <div class="row mb-4 no-gutters">
                <div class="col-3 d-flex">
                    <div class="has-img-category d-flex">
                        <img src="{{asset('images/category/cat_tab7.jpg')}}" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-1 d-flex bg-dark text-center">
                    <h5 class="align-self-center text-white title_block">Abarrotes2</h5>
                </div>
                <div class="col-8">
                    <div class="card rounded-0">
                        <div class="card-body p-3">
                            <div class="row slider-products mb-3 d-flex">
                                <div class="col d-flex">
                                    <div class="card d-flex">
                                        <img src="{{asset('images/products/189-home_default.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h5>
                                            <p class="card-text">PRIMOR | Código de producto: 3198</p>
                                            <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>
                                            <small class="font-weight-bold text-danger">Online</small>
                                            <p class="card-text"><small class="text-muted">Todo medio de pago</small> <span class="float-right font-weight-bold text-danger"> S/.5.00 </span></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block btn-danger">Pedir Ahora</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-danger"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card d-flex">
                                        <img src="{{asset('images/products/193-home_default.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Fettuccini Don Vittorio 500 g</h5>
                                            <p class="card-text">DON VITTORIO | Código de producto: 705358</p>
                                            <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>
                                            <small class="font-weight-bold text-danger">Online</small>
                                            <p class="card-text"><small class="text-muted">Todo medio de pago</small> <span class="float-right font-weight-bold text-danger"> S/.5.00 </span></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block btn-danger">Pedir Ahora</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-danger"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card d-flex">
                                        <img src="{{asset('images/products/197-home_default.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Aceite Vegetal Primor Premium Botella 1 L</h5>
                                            <p class="card-text">PRIMOR | Código de producto: 3198</p>
                                            <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>
                                            <small class="font-weight-bold text-danger">Online</small>
                                            <p class="card-text"><small class="text-muted">Todo medio de pago</small> <span class="float-right font-weight-bold text-danger"> S/.5.00 </span></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block btn-danger">Pedir Ahora</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-danger"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card d-flex">
                                        <img src="{{asset('images/products/3198-1.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Aceite Vegetal Primor Premium Botella 1 L</h5>
                                            <p class="card-text">PRIMOR | Código de producto: 3198</p>
                                            <p class="card-text"><small class="text-muted">Regular <span class="float-right"> S/.7.00 </span></small></p>
                                            <small class="font-weight-bold text-danger">Online</small>
                                            <p class="card-text"><small class="text-muted">Todo medio de pago</small> <span class="float-right font-weight-bold text-danger"> S/.5.00 </span></p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <a href="{{route('detail_show_path', '1')}}" class="btn btn-block btn-danger">Pedir Ahora</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-danger"><i class="fas fa-cart-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form-add-products></form-add-products>
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
