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

        $servicesrubro=RubroServices::insert([
            [
                //'id'=>1,
                'rubro'=>'CallCenter',
                'title'=>'Atento',
                'text'=>'Brindar soluciones de atención al cliente y servicios de relación con los consumidores para ayudar a las empresas a lograr sus objetivos comerciales, mediante la aplicación de tecnología y procesos eficientes, y garantizando la satisfacción de los clientes.',
                'photo'=>'img/gallery/Atento.jpg'
            ],
            [
                //'id'=>2,
                'rubro'=>'CallCenter',
                'title'=>'Konecta',
                'text'=>'Ser reconocidos como el principal socio estratégico para la gestión de la relación con los clientes y la externalización de procesos de negocio en el Perú, mediante la innovación constante, la excelencia operativa y el compromiso con la creación de valor sostenible para todas las partes interesadas.',
                'photo'=>'img/gallery/Konecta.jpg'
            ],
            [
                //'id'=>3,
                'rubro'=>'CallCenter',
                'title'=>'Dynamicall',
                'text'=>'Brindar una solución rápida y precisa a nuestros usuarios finales, logrando un alto nivel de satisfacción de nuestros clientes. Ser el mejor Contact Center en innovación, productividad y calidad de servicio para nuestros clientes y usuarios finales.',
                'photo'=>'img/gallery/Dynamicall.jpg'
            ],
            [
                //'id'=>4,
                'rubro'=>'CallCenter',
                'title'=>'SCC',
                'text'=>'Implementar procesos integrales y de calidad permanentemente adaptados a la realidad cambiante, con un equipo de personas  de enfoque flexible y orientado a lograr satisfacción, eficiencia sostenible y mejora continua.',
                'photo'=>'img/gallery/SCC.jpg'
            ]
        ]);

        $servicesrubro=RubroServices::insert([
            [
                'rubro'=>'CallCenter',
                'title'=>'Atento',
                'text'=>'Brindar soluciones de atención al cliente y servicios de relación con los consumidores para ayudar a las empresas a lograr sus objetivos comerciales, mediante la aplicación de tecnología y procesos eficientes, y garantizando la satisfacción de los clientes.',
                'photo'=>'img/gallery/Atento.jpg'
            ],
            [
                'rubro'=>'CallCenter',
                'title'=>'Konecta',
                'text'=>'Ser reconocidos como el principal socio estratégico para la gestión de la relación con los clientes y la externalización de procesos de negocio en el Perú, mediante la innovación constante, la excelencia operativa y el compromiso con la creación de valor sostenible para todas las partes interesadas.',
                'photo'=>'img/gallery/Konecta.jpg'
            ],
            [
                'rubro'=>'CallCenter',
                'title'=>'Dynamicall',
                'text'=>'Brindar una solución rápida y precisa a nuestros usuarios finales, logrando un alto nivel de satisfacción de nuestros clientes. Ser el mejor Contact Center en innovación, productividad y calidad de servicio para nuestros clientes y usuarios finales.',
                'photo'=>'img/gallery/Dynamicall.jpg'
            ],
            [
                'rubro'=>'CallCenter',
                'title'=>'SCC',
                'text'=>'Implementar procesos integrales y de calidad permanentemente adaptados a la realidad cambiante, con un equipo de personas  de enfoque flexible y orientado a lograr satisfacción, eficiencia sostenible y mejora continua.',
                'photo'=>'img/gallery/SCC.jpg'
            ]
        ]);

        $servicesrubro=RubroServices::insert([
            [
                'rubro'=>'Comercio',
                'title'=>'Linio',
                'text'=>'En Linio, nuestra misión es brindar a nuestros clientes una experiencia de compra en línea excepcional al ofrecerles una amplia selección de productos de calidad, precios competitivos y un servicio al cliente superior. Nos esforzamos por ser la plataforma en línea preferida de los consumidores, conectándolos de manera conveniente con las marcas y productos que aman.',
                'photo'=>'img/gallery/Atento.jpg'
            ],
            [
                'rubro'=>'Comercio',
                'title'=>'Mercado Libre',
                'text'=>'Nuestra misión en Mercado Libre es democratizar el comercio y los pagos en línea en América Latina, brindando a millones de personas la posibilidad de comprar, vender, pagar y enviar productos de manera segura y eficiente. Buscamos impulsar el crecimiento del comercio electrónico en la región, promoviendo la inclusión financiera y generando oportunidades para emprendedores y pequeñas empresas.',
                'photo'=>'img/gallery/Konecta.jpg'
            ],
            [
                'rubro'=>'Comercio',
                'title'=>'Amazon',
                'text'=>'Nuestra misión es ser la empresa más centrada en el cliente del mundo, donde los clientes pueden encontrar y descubrir cualquier cosa que deseen comprar en línea. Nos esforzamos por ofrecer la mejor experiencia de compra posible, ofreciendo selecciones amplias, precios competitivos y envío rápido y confiable. Al mismo tiempo, buscamos brindar una plataforma para que los vendedores puedan alcanzar a clientes de todo el mundo.',
                'photo'=>'img/gallery/Dynamicall.jpg'
            ],
            [
                'rubro'=>'Comercio',
                'title'=>'AliExpress',
                'text'=>'Nuestra misión es hacer que el comercio sea accesible y asequible para todos, conectando a compradores de todo el mundo con vendedores de calidad. Nos esforzamos por brindar una experiencia de compra en línea segura, confiable y conveniente, ofreciendo una amplia selección de productos y servicios, y promoviendo la satisfacción del cliente y el crecimiento de los negocios de nuestros vendedores asociados.',
                'photo'=>'img/gallery/SCC.jpg'
            ]
        ]);

        $servicesrubro=RubroServices::insert([
            [
                'rubro'=>'Consultoria',
                'title'=>'Bembos',
                'text'=>'La mejor hamburguesa a la parrilla por su sabor único y sus creativas combinaciones a partir de insumos de la más alta calidad ofrecida en nuestros atractivos locales. Nuestro espíritu innovador y expresivo se manifiesta en nuestros productos, pero también en nuestros locales, la música, nuestro ambiente y servicios.',
                'photo'=>'img/gallery/Bembos.jpg'
            ],
            [
                'rubro'=>'Consultoria',
                'title'=>'KFC',
                'text'=>'Nuestra misión es satisfacer las necesidades del sector alimentario, mediante la elaboración y comercialización de productos y servicios de óptima calidad, que se ajusten a las necesidades de nuestros clientes, al generar economía, desarrollo y crecimiento para el sector productos, para empleados y accionistas.',
                'photo'=>'img/gallery/KFC.jpg'
            ],
            [
                'rubro'=>'Consultoria',
                'title'=>'Papa Johns',
                'text'=>'Hacemos lo que decimos, cuando decimos que lo haremos.
                Nos hemos ganado el derecho de llevar a otros a un nivel de responsabilidad superior ya que somos responsables ante nosotros mismos, nuestros clientes y nuestros socios comerciales.',
                'photo'=>'img/gallery/Papa-Johns.jpg'
            ],
            [
                'rubro'=>'Consultoria',
                'title'=>'Johnny Rockets',
                'text'=>'No se limita a una década o época, Johnny Rockets combina los mejores elementos de un siglo de historia culinaria Americana, para crear una experiencia y un menú que son relevantes hoy en día y lo serán, en las próximas décadas.',
                'photo'=>'img/gallery/gallery-9.jpg'
            ]
        ]);

        $servicesrubro=RubroServices::insert([
            [
                'rubro'=>'Desarrollo Rural',
                'title'=>'Bembos',
                'text'=>'La mejor hamburguesa a la parrilla por su sabor único y sus creativas combinaciones a partir de insumos de la más alta calidad ofrecida en nuestros atractivos locales. Nuestro espíritu innovador y expresivo se manifiesta en nuestros productos, pero también en nuestros locales, la música, nuestro ambiente y servicios.',
                'photo'=>'img/gallery/Bembos.jpg'
            ],
            [
                'rubro'=>'Desarrollo Rural',
                'title'=>'KFC',
                'text'=>'Nuestra misión es satisfacer las necesidades del sector alimentario, mediante la elaboración y comercialización de productos y servicios de óptima calidad, que se ajusten a las necesidades de nuestros clientes, al generar economía, desarrollo y crecimiento para el sector productos, para empleados y accionistas.',
                'photo'=>'img/gallery/KFC.jpg'
            ],
            [
                'rubro'=>'Desarrollo Rural',
                'title'=>'Papa Johns',
                'text'=>'Hacemos lo que decimos, cuando decimos que lo haremos.
                Nos hemos ganado el derecho de llevar a otros a un nivel de responsabilidad superior ya que somos responsables ante nosotros mismos, nuestros clientes y nuestros socios comerciales.',
                'photo'=>'img/gallery/Papa-Johns.jpg'
            ],
            [
                'rubro'=>'Desarrollo Rural',
                'title'=>'Johnny Rockets',
                'text'=>'No se limita a una década o época, Johnny Rockets combina los mejores elementos de un siglo de historia culinaria Americana, para crear una experiencia y un menú que son relevantes hoy en día y lo serán, en las próximas décadas.',
                'photo'=>'img/gallery/gallery-9.jpg'
            ]
        ]);

        $servicesrubro=RubroServices::insert([
            [
                'rubro'=>'Educacion',
                'title'=>'Bembos',
                'text'=>'La mejor hamburguesa a la parrilla por su sabor único y sus creativas combinaciones a partir de insumos de la más alta calidad ofrecida en nuestros atractivos locales. Nuestro espíritu innovador y expresivo se manifiesta en nuestros productos, pero también en nuestros locales, la música, nuestro ambiente y servicios.',
                'photo'=>'img/gallery/Bembos.jpg'
            ],
            [
                'rubro'=>'Educacion',
                'title'=>'KFC',
                'text'=>'Nuestra misión es satisfacer las necesidades del sector alimentario, mediante la elaboración y comercialización de productos y servicios de óptima calidad, que se ajusten a las necesidades de nuestros clientes, al generar economía, desarrollo y crecimiento para el sector productos, para empleados y accionistas.',
                'photo'=>'img/gallery/KFC.jpg'
            ],
            [
                'rubro'=>'Educacion',
                'title'=>'Papa Johns',
                'text'=>'Hacemos lo que decimos, cuando decimos que lo haremos.
                Nos hemos ganado el derecho de llevar a otros a un nivel de responsabilidad superior ya que somos responsables ante nosotros mismos, nuestros clientes y nuestros socios comerciales.',
                'photo'=>'img/gallery/Papa-Johns.jpg'
            ],
            [
                'rubro'=>'Educacion',
                'title'=>'Johnny Rockets',
                'text'=>'No se limita a una década o época, Johnny Rockets combina los mejores elementos de un siglo de historia culinaria Americana, para crear una experiencia y un menú que son relevantes hoy en día y lo serán, en las próximas décadas.',
                'photo'=>'img/gallery/gallery-9.jpg'
            ]
        ]);

        $servicesrubro=RubroServices::insert([
            [
                'rubro'=>'Entretenimiento',
                'title'=>'Bembos',
                'text'=>'La mejor hamburguesa a la parrilla por su sabor único y sus creativas combinaciones a partir de insumos de la más alta calidad ofrecida en nuestros atractivos locales. Nuestro espíritu innovador y expresivo se manifiesta en nuestros productos, pero también en nuestros locales, la música, nuestro ambiente y servicios.',
                'photo'=>'img/gallery/Bembos.jpg'
            ],
            [
                'rubro'=>'Entretenimiento',
                'title'=>'KFC',
                'text'=>'Nuestra misión es satisfacer las necesidades del sector alimentario, mediante la elaboración y comercialización de productos y servicios de óptima calidad, que se ajusten a las necesidades de nuestros clientes, al generar economía, desarrollo y crecimiento para el sector productos, para empleados y accionistas.',
                'photo'=>'img/gallery/KFC.jpg'
            ],
            [
                'rubro'=>'Entretenimiento',
                'title'=>'Papa Johns',
                'text'=>'Hacemos lo que decimos, cuando decimos que lo haremos.
                Nos hemos ganado el derecho de llevar a otros a un nivel de responsabilidad superior ya que somos responsables ante nosotros mismos, nuestros clientes y nuestros socios comerciales.',
                'photo'=>'img/gallery/Papa-Johns.jpg'
            ],
            [
                'rubro'=>'Entretenimiento',
                'title'=>'Johnny Rockets',
                'text'=>'No se limita a una década o época, Johnny Rockets combina los mejores elementos de un siglo de historia culinaria Americana, para crear una experiencia y un menú que son relevantes hoy en día y lo serán, en las próximas décadas.',
                'photo'=>'img/gallery/gallery-9.jpg'
            ]
        ]);

        $servicesrubro=RubroServices::insert([
            [
                'rubro'=>'Financiero',
                'title'=>'Bembos',
                'text'=>'La mejor hamburguesa a la parrilla por su sabor único y sus creativas combinaciones a partir de insumos de la más alta calidad ofrecida en nuestros atractivos locales. Nuestro espíritu innovador y expresivo se manifiesta en nuestros productos, pero también en nuestros locales, la música, nuestro ambiente y servicios.',
                'photo'=>'img/gallery/Bembos.jpg'
            ],
            [
                'rubro'=>'Financiero',
                'title'=>'KFC',
                'text'=>'Nuestra misión es satisfacer las necesidades del sector alimentario, mediante la elaboración y comercialización de productos y servicios de óptima calidad, que se ajusten a las necesidades de nuestros clientes, al generar economía, desarrollo y crecimiento para el sector productos, para empleados y accionistas.',
                'photo'=>'img/gallery/KFC.jpg'
            ],
            [
                'rubro'=>'Financiero',
                'title'=>'Papa Johns',
                'text'=>'Hacemos lo que decimos, cuando decimos que lo haremos.
                Nos hemos ganado el derecho de llevar a otros a un nivel de responsabilidad superior ya que somos responsables ante nosotros mismos, nuestros clientes y nuestros socios comerciales.',
                'photo'=>'img/gallery/Papa-Johns.jpg'
            ],
            [
                'rubro'=>'Financiero',
                'title'=>'Johnny Rockets',
                'text'=>'No se limita a una década o época, Johnny Rockets combina los mejores elementos de un siglo de historia culinaria Americana, para crear una experiencia y un menú que son relevantes hoy en día y lo serán, en las próximas décadas.',
                'photo'=>'img/gallery/gallery-9.jpg'
            ]
        ]);

        $servicesrubro=RubroServices::insert([
            [
                'rubro'=>'Software',
                'title'=>'IMB',
                'text'=>'Think.',
                'photo'=>'img/gallery/IBM.jpg'
            ],
            [
                'rubro'=>'Software',
                'title'=>'OSIPTEL',
                'text'=>'El Organismo Supervisor de Inversión Privada en Telecomunicaciones.',
                'photo'=>'img/gallery/osiptel.png'
            ],
            [
                'rubro'=>'Software',
                'title'=>'Cosapi',
                'text'=>'Ser la empresa de ingeniería y construcción, sólida, innovadora y de clase mundial, reconocida como la mejor en los proyectos, mercados y emprendimientos donde participemos.',
                'photo'=>'img/gallery/cosapi.png'
            ],
            [
                'rubro'=>'Software',
                'title'=>'KYNDRYL',
                'text'=>'Apoyamos un progreso que transforme la sociedad a largo plazo.',
                'photo'=>'img/gallery/kyndryl.jpg'
            ]
        ]);



    }
}
