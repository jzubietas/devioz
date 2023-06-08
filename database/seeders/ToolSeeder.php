<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Tool;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\Thought;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tools=Tool::insert([
            [
                'id'=>1,
                'title'=>'PHP STORM',
                'text'=>'Un gestor realiza y coordina el trabajo en un proceso o procesos y gestiona el rendimiento de los procesos del proceso.',
                'photo'=>'img/gallery/gallery-6.jpg'
            ],
            [
                'id'=>2,
                'title'=>'SUBLIME',
                'text'=>'DevOps es un método de desarrollo de software que se centra en la colaboración, comunicación e integración entre los ingenieros de sistemas y los desarrolladores de software.',
                'photo'=>'img/gallery/gallery-7.jpg'
            ],
            [
                'id'=>3,
                'title'=>'Vue Js 2',
                'text'=>'Nuestros experimentados y capacitados expertos en TI ayudan a las empresas a mantenerse en contacto con desarrollos recientes, innovaciones y tecnología disruptiva.',
                'photo'=>'img/gallery/gallery-8.jpg'
            ],
            [
                'id'=>4,
                'title'=>'Mysql',
                'text'=>'Un conjunto de datos estructurados que pertenecen a un mismo contexto y, en cuanto a su función, se utiliza para administrar de forma electrónica grandes cantidades de información.',
                'photo'=>'img/gallery/gallery-9.jpg'
            ]
        ]);

    }
}
