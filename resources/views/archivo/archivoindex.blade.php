@extends('layouts.paper')

@section('contenido')

<div class="row col-md-12">
    <div class="col-md-6">
		<h3 class="description">Listado de Imagenes</h3>
	</div>
	<div class="col-md-6">
		<a href="{{ route('archivo.create') }}" style="float:right; "><button type="submit" class="btn btn-primary btn-round" style="margin-top: 0px;">Agregar Imagen</button></a>
	</div>
</div>


<div class="col-md-12">
<div class="card">
  <div class="card-header">
    <h4 class="card-title"> Imagenes </h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-primary">
          <th>
            Nombre
          </th>
          <th>
            Descripcion
          </th>
          
          <th  class="text-right">
          	Descarga
          </th>
        </thead>
        <tbody>
        @foreach ($archivos as $archivo)
			<tr>
				<td>{{$archivo->nombre}}</td>
				<td>{{$archivo->descripcion}}</td>

				<td  class="text-right">
          <a href="{{ route('archivo.descarga', $archivo) }}"><i class="fa fa-download" aria-hidden="true"></i></a>
				</td>
			</tr>
		@endforeach  
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

@endsection

          