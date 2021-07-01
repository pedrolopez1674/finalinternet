<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('empleados')->insert([
			'nombre'=>'Carlos',
			'apellido'=>'Arquieta',
			'salario'=>'10000',
			'edad'=>'20',
			'turno'=>'matutino',
		]);
        DB::table('empleados')->insert([
			'nombre'=>'Julio',
			'apellido'=>'Gomez',
			'salario'=>'12000',
			'edad'=>'26',
			'turno'=>'vespertino',
		]);
		DB::table('empleados')->insert([
			'nombre'=>'Nestor',
			'apellido'=>'Flores',
			'salario'=>'11000',
			'edad'=>'32',
			'turno'=>'matutino',
		]);
		DB::table('empleados')->insert([
			'nombre'=>'Moises',
			'apellido'=>'Rojas',
			'salario'=>'10000',
			'edad'=>'22',
			'turno'=>'matutino',
		]);
		DB::table('empleados')->insert([
			'nombre'=>'Noe',
			'apellido'=>'Mendoza',
			'salario'=>'14000',
			'edad'=>'40',
			'turno'=>'vespertino',
		]);
    }
}
