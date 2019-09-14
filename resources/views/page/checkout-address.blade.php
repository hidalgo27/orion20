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

                    <div class="row no-gutters text-center mb-4">
                        {{--                        <div class="col p-3 bg-light text-truncate">--}}
                        {{--                            <a class="font-weight-bold" href="">1. Información Personal</a>--}}
                        {{--                        </div>--}}
                        <div class="col p-3 bg-light">
                            1. Información Personal
                        </div>
                        <div class="col p-3 bg-danger text-white shadow-sm font-weight-bold text-truncate">
                            2. Dirección
                        </div>
                        <div class="col p-3 bg-white text-muted">
                            3. Pago
                        </div>
                    </div>


                    <form action="{{route('checkout_payment_path', '2')}}" method="get">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label text-right">Nombres</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="staticEmail" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label text-right">Apellidos</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="staticEmail" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label text-right">Direccion</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="staticEmail" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label text-right">Distrito en Cusco</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="staticEmail" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label text-right">Teléfono</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="staticEmail" value="">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Continuar
                                </button>
                            </div>
                        </div>
                    </form>

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
                        <li class="list-group-item bg-dark text-white">
                            <div class="row">
                                <div class="col font-weight-bold">
                                    Total
                                </div>
                                <div class="col-auto text-right font-weight-bold">
                                    S/.2.00
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>
@stop
