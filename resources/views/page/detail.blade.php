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
                <div class="col-9">
                    <div class="row">
                        <div class="col-6">
                            <div class="p-4">
                                <div class="slider slider-for">
                                    <div>
                                        <h3>1</h3>
                                    </div>
                                    <div>
                                        <h3>2</h3>
                                    </div>
                                    <div>
                                        <h3>3</h3>
                                    </div>
                                    <div>
                                        <h3>4</h3>
                                    </div>
                                    <div>
                                        <h3>5</h3>
                                    </div>
                                </div>
                                <div class="slider slider-nav">
                                <div>
                                    <h3>1</h3>
                                </div>
                                <div>
                                    <h3>2</h3>
                                </div>
                                <div>
                                    <h3>3</h3>
                                </div>
                                <div>
                                    <h3>4</h3>
                                </div>
                                <div>
                                    <h3>5</h3>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="">Aceite Vegetal Primor Premium Botella 1 L Para llevar</h5>
                            <p class="m-0">Código de producto: 3198</p>
                            <p><small class="text-muted">Regular <span class=""> S/.7.00 </span></small></p>
                            <small class="font-weight-bold text-danger">Online</small>
                            <p class="card-text m-0"><small class="text-muted">Todo medio de pago</small> <span class="font-weight-bold text-danger"> S/.5.00 </span></p>

                            <div class="row mt-4">
                                <div class="col">
                                    <a href="{{route('cart_show_path', '1')}}" class="btn btn-block btn-danger">Pedir Ahora</a>
                                </div>
{{--                                <div class="col-auto">--}}
{{--                                    <a href="{{route('cart_show_path', '2')}}" class="btn btn-block btn-outline-danger"><i class="fas fa-cart-plus"></i></a>--}}
{{--                                </div>--}}
                            </div>

                            <div class="row my-3">
                                <div class="col">
{{--                                    <h4 class="font-weight-bold">Vea nuestras politicas:</h4>--}}
                                    <a href="#" class="d-block font-weight-bold"><i class="fas fa-chevron-right"></i> Política de seguridad <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="d-block font-weight-bold"><i class="fas fa-chevron-right"></i> Política de envío <i class="fas fa-external-link-alt"></i></a>
                                    <a href="#" class="d-block font-weight-bold"><i class="fas fa-chevron-right"></i> Política de devolución <i class="fas fa-external-link-alt"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row mb-5">
                        <div class="col">
                            <ul class="nav nav-tabs my-4" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="descripcion-tab" data-toggle="tab" href="#descripcion" role="tab" aria-controls="descripcion" aria-selected="true">Descripción</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="detalles-tab" data-toggle="tab" href="#detalles" role="tab" aria-controls="detalles" aria-selected="false">Detalle del producto</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
                                    <div class="px-3">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, quos rem? Doloremque eveniet quae voluptas! Ab accusamus alias aliquam, beatae iste labore laborum nihil numquam officiis placeat quas voluptate voluptatem.
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="detalles" role="tabpanel" aria-labelledby="detalles-tab">
                                    <div class="px-3">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, quos rem? Doloremque eveniet quae voluptas! Ab accusamus alias aliquam, beatae iste labore laborum nihil numquam officiis placeat quas voluptate voluptatem.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis delectus fugiat, nisi nostrum obcaecati perspiciatis quibusdam ullam. Ad, corporis earum! Aut dicta eius est neque numquam quos sint sunt.
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
