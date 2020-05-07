@extends('layouts.page.app')
@section('content')
    <section class="my-3">
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
                <div class="col-9">
                    <ul class="list-group list-group-flush rounded">
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="http://lorempixel.com/400/200/food/?2" alt="" class="w-100">
                                </div>
                                <div class="col-4">
                                    <h5>Aceite Cil 2lts.</h5>
                                    <b>S/.2.50</b>
                                    <small class="text-muted d-block"><b>Codigo de producto:</b>BRT45</small>
                                </div>
                                <div class="col-2">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-2 text-right">
                                    <b>S/.2.50</b>
                                </div>
                                <div class="col-1 text-right">
                                    <i class="fas fa-trash text-danger"></i>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="http://lorempixel.com/400/200/food/?" alt="" class="w-100 rounded">
                                </div>
                                <div class="col-4">
                                    <h5>Aceite Cil 2lts.</h5>
                                    <b>S/.2.50</b>
                                    <small class="text-muted d-block"><b>Codigo de producto:</b>BRT45</small>
                                </div>
                                <div class="col-2">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-2 text-right">
                                    <b>S/.2.50</b>
                                </div>
                                <div class="col-1 text-right">
                                    <i class="fas fa-trash text-danger"></i>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="col">

                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        3 Items
                                    </div>
                                    <div class="col-auto text-right">
                                        S/.3.00
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        Envio
                                    </div>
                                    <div class="col-auto text-right">
                                        S/.2.00
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        IGV
                                    </div>
                                    <div class="col-auto text-right">
                                        18%
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        Subtotal
                                    </div>
                                    <div class="col-auto text-right">
                                        S/.2.00
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        Total
                                    </div>
                                    <div class="col-auto text-right">
                                        S/.2.00
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a  href="{{route('checkout_path', '2')}}" class="btn btn-primary btn-block">Pasar por Caja</a>
                                <button class="btn btn-success btn-block">Pago contra entrega</button>
                            </li>
                        </ul>

                </div>
            </div>
        </div>
    </section>
@stop
