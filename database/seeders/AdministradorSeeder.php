<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('administradors')->insert([
            'nombre' => 'Saul',
            'apellido' => 'Mascorro',
            'nss' => 'BAMC010203',
            'sexo' => 'Masculino',
            'edad' => '20',
            'email' => 'chistian@empresa.com',
            'password' => '12345678',
        ]);
        DB::table('administradors')->insert([
            'nombre' => 'Pedro',
            'apellido' => 'Lopez',
            'nss' => 'LOSP000901',
            'sexo' => 'Masculino',
            'edad' => '20',
            'email' => 'pedro@empresa.com',
            'password' => '12345678',
        ]);

        DB::table('users')->insert([
            'name' => 'Christian',
            'email' => 'christian@empresa.com',
            'password' => bcrypt('12345678'),
        ]);
       	DB::table('users')->insert([
            'name' => 'Pedro',
            'email' => 'pedro@empresa.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
