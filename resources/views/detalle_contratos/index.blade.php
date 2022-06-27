@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="padding-left: 35%; color: black">Detalle del contrato</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-detallecontrato')
                            <a class="btn btn-warning" href="{{ route('detalle_contratos.create') }}">Nuevo</a>
                            @endcan


                            <table class="table table-striped mt-2">
                                <thead style="background-color: black;">
                                    <th style="color: #fff">ID</th>
                                    <th style="color: #fff;">Cotización</th>
                                    <th style="color: #fff;">Precio final</th>
                                    <th style="color: #fff;">Contrato asignado</th>
                                    <th style="color: #fff;">Servicio asignado</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($detallecontratos as $detallecontrato)
                                    <tr>
                                        <td>{{$detallecontrato->id}}</td>
                                        <td>{{$detallecontrato->cotizacion}}</td>
                                        <td>{{$detallecontrato->precio_final}}</td>
                                        <td>{{$detallecontrato->contrato_id}}</td>
                                        <td>{{$detallecontrato->nombre_servicio}}</td>
                                        <td>

                                        @can('editar-detallecontrato')
                                                <a class="btn btn-warning" href="{{ route('detalle_contratos.edit', $detallecontrato->id)}}">Editar</a>
                                            @endcan

                                            @can('borrar-detallecontrato')
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['detalle_contratos.destroy', $detallecontrato->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit ('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $detallecontratos->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
