@extends('layouts.page.app')
@section('content')

    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb font-weight-bold bg-white">
                            <li class="breadcrumb-item"><a href="#">Orion</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Abarrotes</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <aside class="col-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item active">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </aside>
                <div class="col">
                    <div class="row">
                        <div class="col-4 d-flex mb-4">
                            <div class="card d-flex">
                                <img src="http://lorempixel.com/253/253/food/?1" class="card-img-top" alt="...">
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
                        <div class="col-4 d-flex mb-4">
                            <div class="card d-flex">
                                <img src="http://lorempixel.com/253/253/food/?2" class="card-img-top" alt="...">
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
                        <div class="col-4 d-flex mb-4">
                            <div class="card d-flex">
                                <img src="http://lorempixel.com/253/253/food/?3" class="card-img-top" alt="...">
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
                        <div class="col-4 d-flex mb-4">
                            <div class="card d-flex">
                                <img src="http://lorempixel.com/253/253/food/?4" class="card-img-top" alt="...">
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
                        <div class="col-4 d-flex mb-4">
                            <div class="card d-flex">
                                <img src="http://lorempixel.com/253/253/food/?5" class="card-img-top" alt="...">
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
                        <div class="col-4 d-flex mb-4">
                            <div class="card d-flex">
                                <img src="http://lorempixel.com/253/253/food/?6" class="card-img-top" alt="...">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
