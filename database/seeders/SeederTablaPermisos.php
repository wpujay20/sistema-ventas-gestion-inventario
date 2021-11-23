<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{

    public function run()
    {
        $permisos =[

            // tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',


            //Tabla Blogs
            'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',

        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
