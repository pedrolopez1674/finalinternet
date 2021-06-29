@extends('layouts.paper')

@section('contenido')

<div class="col-md-12">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Editar Empleado</h5>
      </div>
      <div class="card-body">
        @if(isset($empleado))
			<form action="{{ route('empleado.update' , $empleado) }}" method="POST">
		@method('PATCH')
		@else
			<form action="{{ route('empleado.store') }}" method="POST">
		@endif	
		@csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" value="{{ old('nombre') ?? $empleado->nombre ?? '' }}">

                
                @error('nombre')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
                

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Apellido</label>
                <input name="apellido" type="text" class="form-control" value="{{ old('apellido') ?? $empleado->apellido ?? '' }}">
                @error('apellido')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Salario</label>
                <input name="salario" type="number" class="form-control" value="{{ old('salario') ?? $empleado->salario ?? '' }}">
                @error('salario')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Edad</label>
                <input name="edad" type="number" class="form-control" value="{{ old('edad') ?? $empleado->edad ?? '' }}">
                @error('edad')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Turno</label>
                <input name="turno" type="text" class="form-control" value="{{ old('turno') ?? $empleado->turno ?? '' }}">
                @error('turno')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
              </div>
            </div>
          </div>
          
          
          <div class="row">
            <div class="update ml-auto mr-auto">

            	@if(isset($empleado))
      					<button name="enviar" type="submit" class="btn btn-primary btn-round">Actualizar Empleado</button>
      				@else
      					<button name="enviar" type="submit" class="btn btn-primary btn-round">Guardar Empleado</button>
      				@endif	
              
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>

@endsection