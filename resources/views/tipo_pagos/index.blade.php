@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="padding-left: 40%; color: black">Tipo de pago</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @can('crear-tipopago')
                            <a class="btn btn-warning" href="{{ route('tipo_pagos.create') }}">Nuevo</a>
                            @endcan


                            <table class="table table-striped mt-2">
                                <thead style="background-color: black;">
                                    <th style="color: #fff">ID</th>
                                    <th style="color: #fff;">Tipos de pago</th>
                                    <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($tipopagos as $tipopago)
                                    <tr>
                                        <td>{{$tipopago->id}}</td>
                                        <td>{{$tipopago->tipo_de_pago}}</td>
                                        <td>
                                            
                                            @can('editar-tipopago')
                                                <a class="btn btn-warning" href="{{ route('tipo_pagos.edit', $tipopago->id)}}">Editar</a>
                                            @endcan

                                            @can('borrar-tipopago')
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['tipo_pagos.destroy', $tipopago->id], 'style'=>'display:inline']) !!}
                                                    {!! Form::submit ('Borrar', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">
                                {!! $tipopagos->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
