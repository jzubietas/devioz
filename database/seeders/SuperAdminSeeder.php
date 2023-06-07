<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario=User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('12345678')
        ]);
        $rol=Role::create(['name'=>'Administrador']);
        $rol_d=Role::create(['name'=>'Desarrollo']);
        $rol_u=Role::create(['name'=>'Usuario']);
        $permisos=Permission::pluck('id','id')->all();
        $rol->syncPermissions($permisos);
        $usuario->assignRole([$rol->id]);
    }
}
