<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\Thought;

class ThoughtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thoughts=Thought::create(
            [
                'description'=>'El software es una gran combinación entre arte e ingeniería',
                'author'=>'Bill Gates',
            ],
            [
                'description'=>'El diseño no es lo que se ve y lo que se siente. El diseño es cómo funciona.',
                'author'=>'Steve Jobs',
            ],
            [
                'description'=>'Especialmente en la tecnología, necesitamos cambios revolucionarios, no cambios incrementales.',
                'author'=>'Larry Page',
            ]
        );

    }
}
