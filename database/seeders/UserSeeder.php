<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = Permission::pluck('name');

        User::create([
            'nombre' => 'super admin',
            'email' => 'super@aeurus.cl',
            'password' => '111111',
            'email_verificado_en' => now(),
            'estado' => 1
        ])->assignRole('Admin')->givePermissionTo($permisos);

    }
}
