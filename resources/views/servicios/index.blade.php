@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="padding-left: 40%; color: black">Servicios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-servicio')
                            <a class="btn btn-warning" href="{{ route('servicios.create') }}">Nuevo</a>
                            @endcan


                            <table class="table table-striped mt-2">
                                <thead style="background-color: black;">
                                    <th style="color: #fff;">ID</th>
                                    <th style="color: #fff;">Nombre</th>
                                    <th style="color: #fff;">Descripción</th>
                                    <th style="color: #fff;">Categoría del servicio</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($servicios as $servicio)
                                    <tr>
                                        <td>{{$servicio->id}}</td>
                                        <td>{{$servicio->nombre_servicio}}</td>
                                        <td>{{$servicio->descripcion_servicio}}</td>
                                        <td>{{$servicio->nombre_categoria}}</td>
                                        <td>

                                        @can('editar-servicio')
                                                <a class="btn btn-warning" href="{{ route('servicios.edit', $servicio->id)}}">Editar</a>
                                            @endcan

                                            @can('borrar-servicio')
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['servicios.destroy', $servicio->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit ('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $servicios->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
