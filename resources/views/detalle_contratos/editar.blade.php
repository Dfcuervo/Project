@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="padding-left: 37%; color: black">Editar detalle de contrato</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{$error}}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {{-- <form action="{{ route('detalle_contratos.update', $detallecontratos->id)}}" method="POST"> --}}
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="cotizacion">Cotización</label>
                                        <input type="text" name="nombre_categoria" class="form-control" value="{{ $detallecontratos->cotizacion }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="precio_final">Precio final</label>
                                        <input type="text" name="precio_final" class="form-control" value="{{ $detallecontratos->precio_final }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="contrato_id">Asignación de contrato</label>
                                        <input type="text" name="contrato_id" class="form-control" value="{{ $detallecontratos->contrato_id }}">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="servicio_id">Servicio asignado</label>
                                        <input type="text" name="servicio_id" class="form-control" value="{{ $detallecontratos->servicio_id }}">
                                    </div>
                                    <br>
                                <button type="submit" class="btn btn-warning">Guardar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
