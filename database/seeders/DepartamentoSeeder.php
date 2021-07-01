<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departamentos')->insert([
			'nombre'=>'Ventas',
			'descripcion'=>'Este departamento se encarga de las ventas',
			'user_id'=>'1',
		]);
		DB::table('departamentos')->insert([
			'nombre'=>'Produccion',
			'descripcion'=>'Este departamento se encarga de la produccion',
			'user_id'=>'2',
		]);
		DB::table('departamentos')->insert([
			'nombre'=>'Diseño',
			'descripcion'=>'Este departamento se encarga del diseño de la empresa',
			'user_id'=>'1',
		]);
		DB::table('departamentos')->insert([
			'nombre'=>'Marketing',
			'descripcion'=>'Este departamento se encarga del marketing',
			'user_id'=>'2',
		]);
		DB::table('departamentos')->insert([
			'nombre'=>'Contabilidad',
			'descripcion'=>'Este departamento se encarga de la contabilidad de la empresa',
			'user_id'=>'1',
		]);
    }
}
