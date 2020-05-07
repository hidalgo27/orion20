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

                    <div class="row no-gutters text-center">
{{--                        <div class="col p-3 bg-light text-truncate">--}}
{{--                            <a class="font-weight-bold" href="">1. Información Personal</a>--}}
{{--                        </div>--}}
                        <div class="col p-3 bg-danger text-white shadow-sm font-weight-bold text-truncate">
                            1. Información Personal
                        </div>
                        <div class="col p-3 bg-white text-muted">
                            2. Dirección
                        </div>
                        <div class="col p-3 bg-white text-muted">
                            3. Pago
                        </div>
                    </div>

                    <ul class="nav nav-tabs my-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="invitado-tab" data-toggle="tab" href="#invitado" role="tab" aria-controls="invitado" aria-selected="true">Pedir como invitado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sesion-tab" data-toggle="tab" href="#sesion" role="tab" aria-controls="sesion" aria-selected="false">Iniciar Sesión</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="invitado" role="tabpanel" aria-labelledby="invitado-tab">

                            <form action="{{route('checkout_address_path', '2')}}" method="get">
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
                                    <label for="staticEmail" class="col-sm-4 col-form-label text-right">Email</label>
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
                        <div class="tab-pane fade" id="sesion" role="tabpanel" aria-labelledby="sesion-tab">


                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


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
@push('scripts')
    <script>
        $(function () {
            $('#myList a:last-child').tab('show')
        })
    </script>
@endpush
