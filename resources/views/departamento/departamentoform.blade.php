@extends('layouts.paper')

@section('contenido')

<div class="col-md-12">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Editar departamento</h5>
      </div>
      <div class="card-body">
        @if(isset($departamento))
			<form action="{{ route('departamento.update' , $departamento) }}" method="POST">
		@method('PATCH')
		@else
			<form action="{{ route('departamento.store') }}" method="POST">
		@endif	
		@csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" value="{{ old('nombre') ?? $departamento->nombre ?? '' }}">

                
                @error('nombre')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
                

              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Descripcion</label>
                <textarea name="descripcion" class="form-control textarea" value="{{ old('descripcion') ?? $departamento->descripcion ?? '' }}">{{  old('descripcion') ?? $departamento->descripcion ?? '' }}</textarea>
                 @error('descripcion')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <div class="update ml-auto mr-auto">

            	@if(isset($departamento))
					<button name="enviar" type="submit" class="btn btn-primary btn-round">Actualizar Departamento</button>
				@else
					<button name="enviar" type="submit" class="btn btn-primary btn-round">Guardar Departamento</button>
				@endif	
              
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>




@endsection