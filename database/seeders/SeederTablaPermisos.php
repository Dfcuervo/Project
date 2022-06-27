<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;

//Comando para cargar los seeders(permisos):
//php artisan db:seed --class=SeederTablaPermisos

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Tablas de la BD:

            //Tabla categoria
            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',

            //Tabla servicio
            'ver-servicio',
            'crear-servicio',
            'editar-servicio',
            'borrar-servicio',

            //Tabla tipo pago
            'ver-tipopago',
            'crear-tipopago',
            'editar-tipopago',
            'borrar-tipopago',

            //Tabla contrato
            'ver-contrato',
            'crear-contrato',
            'editar-contrato',
            'borrar-contrato',

            //Tabla detalle contrato
            'ver-detallecontrato',
            'crear-detallecontrato',
            'editar-detallecontrato',
            'borrar-detallecontrato',
        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
