@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="padding-left: 40%; color: black">Categorías</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-categoria')
                            <a class="btn btn-warning" href="{{ route('categorias.create') }}">Nuevo</a>
                            @endcan


                            <table class="table table-striped mt-2">
                                <thead style="background-color: black;">
                                    <th style="color: #fff;">ID</th>
                                    <th style="color: #fff;">Nombre categoría</th>
                                    <th style="color: #fff;">Descripción categoría</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($categorias as $categoria)
                                    <tr>
                                        <td>{{$categoria->id}}</td>
                                        <td>{{$categoria->nombre_categoria}}</td>
                                        <td>{{$categoria->descripcion_categoria}}</td>
                                        <td>
                                            @can('editar-categoria')
                                                <a class="btn btn-warning" href="{{ route('categorias.edit', $categoria->id)}}">Editar</a>
                                            @endcan

                                            @can('borrar-categoria')
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['categorias.destroy', $categoria->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit ('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $categorias->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
