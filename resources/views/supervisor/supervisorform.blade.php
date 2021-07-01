@extends('layouts.paper')

@section('contenido')

<div class="col-md-12">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Informacion de supervisor</h5>
      </div>
      <div class="card-body">
        @if(isset($supervisor))
			<form action="{{ route('supervisor.update' , $supervisor) }}" method="POST">
		@method('PATCH')
		@else
			<form action="{{ route('supervisor.store') }}" method="POST">
		@endif	
		@csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" value="{{ old('nombre') ?? $supervisor->nombre ?? '' }}">

                
                @error('nombre')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
                

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Correo</label>
                <input name="correo" type="email" class="form-control" value="{{ old('correo') ?? $supervisor->correo ?? '' }}">
                @error('correo')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Contraseña</label>
                <input name="pass" type="password" class="form-control" value="{{ old('pass') ?? $supervisor->pass ?? '' }}">
                @error('pass')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Salario</label>
                <input name="salario" type="number" class="form-control" value="{{ old('salario') ?? $supervisor->salario ?? '' }}">
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
                <input name="edad" type="number" class="form-control" value="{{ old('edad') ?? $supervisor->edad ?? '' }}">
                @error('edad')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
                <input type="hidden" name="tipo" value="1" class="">
              </div>
            </div>
          </div>
          
          
          <div class="row">
            <div class="update ml-auto mr-auto">

            	@if(isset($empleado))
      					<button name="enviar" type="submit" class="btn btn-primary btn-round">Actualizar Supervisor</button>
      				@else
      					<button name="enviar" type="submit" class="btn btn-primary btn-round">Guardar Supervisor</button>
      				@endif	
              
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>

@endsection