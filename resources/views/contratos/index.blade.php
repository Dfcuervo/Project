@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="padding-left: 40%; color: black">Contratos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-contrato')
                            <a class="btn btn-warning" href="{{ route('contratos.create') }}">Nuevo</a>
                            @endcan


                            <table class="table table-striped mt-2">
                                <thead style="background-color: black;">
                                    <th style="color: #fff">ID</th>
                                    <th style="color: #fff;">Fecha</th>
                                    <th style="color: #fff;">Dirección</th>
                                    <th style="color: #fff;">Contrato realizado por</th>
                                    <th style="color: #fff;">Tipo de pago</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($contratos as $contrato)
                                    <tr>
                                        <td>{{$contrato->id}}</td>
                                        <td>{{$contrato->fecha}}</td>
                                        <td>{{$contrato->direccion}}</td>
                                        <td>{{$contrato->name}}</td>
                                        <td>{{$contrato->tipo_de_pago}}</td>
                                        <td>

                                        @can('editar-contrato')
                                                <a class="btn btn-warning" href="{{ route('contratos.edit', $contrato->id)}}">Editar</a>
                                            @endcan

                                            @can('borrar-contrato')
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['contratos.destroy', $contrato->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit ('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $contratos->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
