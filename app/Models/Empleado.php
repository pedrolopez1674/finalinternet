<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'salario','edad','turno'];
    

     public function departamentos(){
    	return $this->belongsToMany(Departamento::class);
    }
}
