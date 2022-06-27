@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading" style="padding-left: 40%; color: black">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                   <div class="card bg-c-black order-card">
                                <div class="card-blok">
                                    <h5>Usuarios</h5>
                                    @php
                                    use App\Models\User;
                                    $cant_usuarios = User::count();
                                    @endphp


                                    <h2 class="text-right"><i class="fa fa-users f-left" style="margin-left: 15px"></i><span style="margin-right: 25px">{{$cant_usuarios}}</span></h2>
                                    <p class="m-b-0 text-right"><a href="/usuarios" class="text-white" style="margin-right: 5px">Ver más</a></p>
                                </div>
                            </div>
                                </div>

                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-black order-card">
                                 <div class="card-blok">
                                     <h5>Roles</h5>
                                     @php
                                     use Spatie\Permission\Models\Role;
                                     $cant_roles = Role::count();
                                     @endphp


                                     <h2 class="text-right"><i class="fa fa-user-lock f-left" style="margin-left: 15px"></i><span style="margin-right: 25px">{{$cant_roles}}</span></h2>
                                     <p class="m-b-0 text-right"><a href="/roles" class="text-white" style="margin-right: 5px">Ver más</a></p>
                                 </div>
                             </div>
                                 </div>

                                 <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-black order-card">
                                 <div class="card-blok">
                                     <h5>Contratos</h5>
                                     @php
                                     use App\Models\Contrato;
                                     $cant_contratos = Contrato::count();
                                     @endphp


                                     <h2 class="text-right"><i class="fa fa-file f-left" style="margin-left: 15px"></i><span style="margin-right: 25px">{{$cant_contratos}}</span></h2>
                                     <p class="m-b-0 text-right"><a href="/contratos" class="text-white" style="margin-right: 5px">Ver más</a></p>
                                 </div>
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

