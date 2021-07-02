@extends('layouts.paper')

@section('contenido')

<div class="col-md-12">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Editar   Imagen</h5>
      </div>
      <div class="card-body">
        
      <form action="{{ route('archivo.store') }}" method="POST" enctype="multipart/form-data">
      
    @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Descripcion</label>
                <input name="descripcion" type="text" class="form-control" value="{{ old('descripcion') ?? $archivo->descripcion ?? '' }}">

                @error('descripcion')
                  <p class="text-danger"> {{ $message }} </p>
                @enderror
                

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Clic aqui para seleccionar un archivo</label>
                <input name="archivo" type="file">
              </div>
            </div>
          </div>       
          
          <div class="row">
            <div class="update ml-auto mr-auto">

              
                <button name="enviar" type="submit" class="btn btn-primary btn-round">Guardar Imagen</button>
               
              
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>

@endsection