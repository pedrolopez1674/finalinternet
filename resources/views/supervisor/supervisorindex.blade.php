@extends('layouts.paper')

@section('contenido')

<div class="row col-md-12">
    <div class="col-md-6">
		<h3 class="description">Listado de supervisores</h3>
	</div>
  @cannot('create')
	<div class="col-md-6">
		<a href="{{ route('supervisor.create') }}" style="float:right; "><button type="submit" class="btn btn-primary btn-round" style="margin-top: 0px;">Agregar supervisor</button></a>
	</div>
  @endcannot
</div>


<div class="col-md-12">
<div class="card">
  <div class="card-header">
    <h4 class="card-title"> Supervisores </h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-primary">
          <th>
            Id
          </th>
          <th>
            Nombre
          </th>
          <th>
            Correo
          </th>
          <th>
            Salario
          </th>
          <th>
            Edad
          </th>
          <th  class="text-right">
          	Ver detalles
          </th>
        </thead>
        <tbody>
        @foreach ($supervisores as $supervisor)
			<tr>
				<td>{{$supervisor->id}}</td>
				<td>{{$supervisor->nombre}}</td>
				<td>{{$supervisor->correo}}</td>
        <td>{{$supervisor->salario}}</td>
        <td>{{$supervisor->edad}}</td>

				<td  class="text-right"><a href="{{route('supervisor.show', $supervisor->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
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

          