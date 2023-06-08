<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

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
            //Operaciones sobre tabla roles
            /*'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',*/

            //Operaciones sobre tabla permisions
            /*'ver-permiso',
            'crear-permiso',
            'editar-permiso',
            'borrar-permiso',*/

            //Operaciones sobre tabla usuarios
            /*'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',*/

            //Operacions sobre tabla blogs
            /*'ver-blog',
            'crear-blog',
            'editar-blog',
            'borrar-blog',*/

            //Operacions sobre tabla item
            /*'ver-item',
            'crear-item',
            'editar-item',
            'borrar-item',*/

            //Operacions sobre tabla rubros
            /*'ver-rubro',
            'crear-rubro',
            'editar-rubro',
            'borrar-rubro',*/

            //thought
            'ver-pensamiento',
            'crear-pensamiento',
            'editar-pensamiento',
            'borrar-pensamiento',

            //services
            'ver-servicio',
            'crear-servicio',
            'editar-servicio',
            'borrar-servicio',

            //tools
            'ver-herramienta',
            'crear-herramienta',
            'editar-herramienta',
            'borrar-herramienta',

            //rubro alimentario
            /*'ver-alimentario',
            'ver-alimentario-banner',
            'ver-alimentario-servicios',
            'crear-alimentario-servicios',
            'editar-alimentario-banner',
            'editar-alimentario-servicios',
            'borrar-alimentario-servicios',*/

            //rubro callcenter
            /*'ver-callcenter',
            'ver-callcenter-banner',
            'ver-callcenter-servicios',
            'crear-callcenter-servicios',
            'editar-callcenter-banner',
            'editar-callcenter-servicios',
            'borrar-callcenter-servicios',*/

            //rubro comercio
            /*'ver-comercio',
            'ver-comercio-banner',
            'ver-comercio-servicios',
            'crear-comercio-servicios',
            'editar-comercio-banner',
            'editar-comercio-servicios',
            'borrar-comercio-servicios',*/

            //rubro consultoras
            /*'ver-consultora',
            'ver-consultora-banner',
            'ver-consultora-servicios',
            'crear-consultora-servicios',
            'editar-consultora-banner',
            'editar-consultora-servicios',
            'borrar-consultora-servicios',*/

            //rubro desarrollorural
            /*'ver-desarrollorural',
            'ver-desarrollorural-banner',
            'ver-desarrollorural-servicios',
            'crear-desarrollorural-servicios',
            'editar-desarrollorural-banner',
            'editar-desarrollorural-servicios',
            'borrar-desarrollorural-servicios',*/

            //rubro educacion
            /*'ver-educacion',
            'ver-educacion-banner',
            'ver-educacion-servicios',
            'crear-educacion-servicios',
            'editar-educacion-banner',
            'editar-educacion-servicios',
            'borrar-educacion-servicios',*/

            //rubro educacion
            /*'ver-energia',
            'ver-energia-banner',
            'ver-energia-servicios',
            'crear-energia-servicios',
            'editar-energia-banner',
            'editar-energia-servicios',
            'borrar-energia-servicios',*/

            //rubro entretenimiento
            /*'ver-entretenimiento',
            'ver-entretenimiento-banner',
            'ver-entretenimiento-servicios',
            'crear-entretenimiento-servicios',
            'editar-entretenimiento-banner',
            'editar-entretenimiento-servicios',
            'borrar-entretenimiento-servicios',*/

            //rubro financiero
            /*'ver-financiero',
            'ver-financiero-banner',
            'ver-financiero-servicios',
            'crear-financiero-servicios',
            'editar-financiero-banner',
            'editar-financiero-servicios',
            'borrar-financiero-servicios',*/

            //rubro hoteleria
            /*'ver-hoteleria',
            'ver-hoteleria-banner',
            'ver-hoteleria-servicios',
            'crear-hoteleria-servicios',
            'editar-hoteleria-banner',
            'editar-hoteleria-servicios',
            'borrar-hoteleria-servicios',*/

            //rubro legal
            /*'ver-legal',
            'ver-legal-banner',
            'ver-legal-servicios',
            'crear-legal-servicios',
            'editar-legal-banner',
            'editar-legal-servicios',
            'borrar-legal-servicios',*/

            //rubro logistica
            /*'ver-logistica',
            'ver-logistica-banner',
            'ver-logistica-servicios',
            'crear-logistica-servicios',
            'editar-logistica-banner',
            'editar-logistica-servicios',
            'borrar-logistica-servicios',*/

            //rubro medicina
            /*'ver-medicina',
            'ver-medicina-banner',
            'ver-medicina-servicios',
            'crear-medicina-servicios',
            'editar-medicina-banner',
            'editar-medicina-servicios',
            'borrar-medicina-servicios',*/

            //rubro mineria
            /*'ver-mineria',
            'ver-mineria-banner',
            'ver-mineria-servicios',
            'crear-mineria-servicios',
            'editar-mineria-banner',
            'editar-mineria-servicios',
            'borrar-mineria-servicios',*/

            //rubro redes
            /*'ver-redes',
            'ver-redes-banner',
            'ver-redes-servicios',
            'crear-redes-servicios',
            'editar-redes-banner',
            'editar-redes-servicios',
            'borrar-redes-servicios',*/

            //rubro rrhh
            /*'ver-rrhh',
            'ver-rrhh-banner',
            'ver-rrhh-servicios',
            'crear-rrhh-servicios',
            'editar-rrhh-banner',
            'editar-rrhh-servicios',
            'borrar-rrhh-servicios',*/

            //rubro refineria
            /*'ver-refineria',
            'ver-refineria-banner',
            'ver-refineria-servicios',
            'crear-refineria-servicios',
            'editar-refineria-banner',
            'editar-refineria-servicios',
            'borrar-refineria-servicios',*/

            //rubro seguridad
            /*'ver-seguridad',
            'ver-seguridad-banner',
            'ver-seguridad-servicios',
            'crear-seguridad-servicios',
            'editar-seguridad-banner',
            'editar-seguridad-servicios',
            'borrar-seguridad-servicios',*/

            //rubro servicios
            /*'ver-servicios',
            'ver-servicios-banner',
            'ver-servicios-servicios',
            'crear-servicios-servicios',
            'editar-servicios-banner',
            'editar-servicios-servicios',
            'borrar-servicios-servicios',*/

            //rubro software
            /*'ver-software',
            'ver-software-banner',
            'ver-software-servicios',
            'crear-software-servicios',
            'editar-software-banner',
            'editar-software-servicios',
            'borrar-software-servicios',*/

            //rubro supermercado
            /*'ver-supermercado',
            'ver-supermercado-banner',
            'ver-supermercado-servicios',
            'crear-supermercado-servicios',
            'editar-supermercado-banner',
            'editar-supermercado-servicios',
            'borrar-supermercado-servicios',*/

            //rubro telecomunicacion
            /*'ver-telecomunicacion',
            'ver-telecomunicacion-banner',
            'ver-telecomunicacion-servicios',
            'crear-telecomunicacion-servicios',
            'editar-telecomunicacion-banner',
            'editar-telecomunicacion-servicios',
            'borrar-telecomunicacion-servicios',*/

            //rubro transporte
            /*'ver-transporte',
            'ver-transporte-banner',
            'ver-transporte-servicios',
            'crear-transporte-servicios',
            'editar-transporte-banner',
            'editar-transporte-servicios',
            'borrar-transporte-servicios',*/

        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
