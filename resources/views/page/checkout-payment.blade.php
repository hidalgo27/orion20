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
                        <div class="col p-3 bg-light">
                            2. Dirección
                        </div>
                        <div class="col p-3 bg-danger text-white shadow-sm font-weight-bold text-truncate">
                            3. Pago
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h3 class="font-weight-bold">Ya casi terminamos</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis, ducimus eius et excepturi iste minus, modi mollitia natus omnis perspiciatis praesentium provident rem sunt vel. Quaerat quo sed totam.</p>
                            <div class="row">
                                <div class="col-3 font-weight-bold">
                                    Nombre:
                                </div>
                                <div class="col">
                                    Hidalgo
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 font-weight-bold">
                                    Apellidos:
                                </div>
                                <div class="col">
                                    Ponce
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 font-weight-bold">
                                    teléfono:
                                </div>
                                <div class="col">
                                    984309399
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 font-weight-bold">
                                    Dirección de envío:
                                </div>
                                <div class="col">
                                    Urb las calles de por ahi
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 font-weight-bold">
                                    Distrito:
                                </div>
                                <div class="col">
                                    San Sebastian - Cusco - Cusco
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                            <h4 class="font-weight-bold">Vea nuestras politicas:</h4>
                            <a href="#" class="d-block font-weight-bold"><i class="fas fa-chevron-right"></i> Política de seguridad <i class="fas fa-external-link-alt"></i></a>
                            <a href="#" class="d-block font-weight-bold"><i class="fas fa-chevron-right"></i> Política de envío <i class="fas fa-external-link-alt"></i></a>
                            <a href="#" class="d-block font-weight-bold"><i class="fas fa-chevron-right"></i> Política de devolución <i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col was-validated">
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" name="terminos" id="terminos" disabled checked>
                                <label class="custom-control-label font-weight-bold" for="terminos">Acepto los terminos, condiciones y politicas.</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col">

                    <ul class="list-group">
                        <li class="list-group-item active font-weight-bold">
                            <i class="fas fa-lock"></i> Pago Seguro
                        </li>
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
                                <div class="col font-weight-bold">
                                    Total
                                </div>
                                <div class="col-auto text-right font-weight-bold">
                                    S/.2.00
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item text-white">
                            <a href="" class="btn btn-block btn-primary">Pagar</a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>
@stop
