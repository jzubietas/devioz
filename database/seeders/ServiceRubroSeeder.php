<?php

namespace Database\Seeders;

use App\Models\RubroServices;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\Thought;

class ServiceRubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicesrubro=RubroServices::insert([
            [
                //'id'=>1,
                'rubro'=>'Alimentario',
                'title'=>'Bembos',
                'text'=>'La mejor hamburguesa a la parrilla por su sabor único y sus creativas combinaciones a partir de insumos de la más alta calidad ofrecida en nuestros atractivos locales. Nuestro espíritu innovador y expresivo se manifiesta en nuestros productos, pero también en nuestros locales, la música, nuestro ambiente y servicios.',
                'photo'=>'img/gallery/Bembos.jpg'
            ],
            [
                //'id'=>2,
                'rubro'=>'Alimentario',
                'title'=>'KFC',
                'text'=>'Nuestra misión es satisfacer las necesidades del sector alimentario, mediante la elaboración y comercialización de productos y servicios de óptima calidad, que se ajusten a las necesidades de nuestros clientes, al generar economía, desarrollo y crecimiento para el sector productos, para empleados y accionistas.',
                'photo'=>'img/gallery/KFC.jpg'
            ],
            [
                //'id'=>3,
                'rubro'=>'Alimentario',
                'title'=>'Papa Johns',
                'text'=>'Hacemos lo que decimos, cuando decimos que lo haremos.
                Nos hemos ganado el derecho de llevar a otros a un nivel de responsabilidad superior ya que somos responsables ante nosotros mismos, nuestros clientes y nuestros socios comerciales.',
                'photo'=>'img/gallery/Papa-Johns.jpg'
            ],
            [
                //'id'=>4,
                'rubro'=>'Alimentario',
                'title'=>'Johnny Rockets',
                'text'=>'No se limita a una década o época, Johnny Rockets combina los mejores elementos de un siglo de historia culinaria Americana, para crear una experiencia y un menú que son relevantes hoy en día y lo serán, en las próximas décadas.',
                'photo'=>'img/gallery/gallery-9.jpg'
            ]
        ]);



    }
}
