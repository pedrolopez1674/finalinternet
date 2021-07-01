<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('supervisors')->insert([
			'nombre'=>'Juan',
			'correo'=>'juan@empresa.com',
			'pass'=>'12345678',
			'salario'=>'20000',
			'edad'=>'38',
		]);
		DB::table('users')->insert([
			'name'=>'Juan',
			'email'=>'juan@empresa.com',
			'password'=>bcrypt('12345678'),
			'tipo'=>'1',
		]);
		DB::table('supervisors')->insert([
			'nombre'=>'Giovanni',
			'correo'=>'giovanni@empresa.com',
			'pass'=>'12345678',
			'salario'=>'18500',
			'edad'=>'35',
		]);
		DB::table('users')->insert([
			'name'=>'Giovanni',
			'email'=>'giovanni@empresa.com',
			'password'=>bcrypt('12345678'),
			'tipo'=>'1',
		]);
		DB::table('supervisors')->insert([
			'nombre'=>'Hector',
			'correo'=>'hector@empresa.com',
			'pass'=>'12345678',
			'salario'=>'21500',
			'edad'=>'52',
		]);
		DB::table('users')->insert([
			'name'=>'Hector',
			'email'=>'hector@empresa.com',
			'password'=>bcrypt('12345678'),
			'tipo'=>'1',
		]);
		DB::table('supervisors')->insert([
			'nombre'=>'Rebecca',
			'correo'=>'rebecca@empresa.com',
			'pass'=>'12345678',
			'salario'=>'25000',
			'edad'=>'35',
		]);
		DB::table('users')->insert([
			'name'=>'Rebecca',
			'email'=>'rebecca@empresa.com',
			'password'=>bcrypt('12345678'),
			'tipo'=>'1',
		]);
		DB::table('supervisors')->insert([
			'nombre'=>'Sandra',
			'correo'=>'sandra@empresa.com',
			'pass'=>'12345678',
			'salario'=>'22000',
			'edad'=>'33',
		]);
		DB::table('users')->insert([
			'name'=>'Sandra',
			'email'=>'sandra@empresa.com',
			'password'=>bcrypt('12345678'),
			'tipo'=>'1',
		]);
    }
}
