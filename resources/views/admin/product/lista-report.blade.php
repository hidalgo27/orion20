@extends('layouts.app-admin')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">ORDENES</a></li>
<li class="breadcrumb-item active" aria-current="page"><a href="{{route('reserva.lista')}}">REPORT</a></li>

@endsection
@section('content')
@php
use Carbon\Carbon;
@endphp
<div class="row">
    <div class="col">
        <form action="{{ route('productos.lista.report.post') }}" method="post">
            <div class="row">
                <div class="col">
                    <label class="sr-only" for="fecha_ini">Desde</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Desde</div>
                        </div>
                        <input type="date" class="form-control" id="fecha_ini" name="desde" value="{{ $f1 }}" required>
                    </div>
                </div>
                <div class="col">
                    <label class="sr-only" for="fecha_hasta">Hasta</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">Hasta</div>
                        </div>
                        <input type="date" class="form-control" id="fecha_hasta" name="hasta" value="{{ $f2 }}" required>
                    </div>
                </div>
                <div class="col">
                    @csrf
                    <button type="submit" class="btn btn-primary"><i class="fas fa-calendar"></i> Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>CODIGO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=0;
                @endphp
                    @foreach ($array as $item)
                    @php
                    $i++;
                @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item['codigo'] }}</td>
                        <td>{{ $item['producto'] }}</td>
                        <td>{{ $item['cantidad'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>


@endsection
