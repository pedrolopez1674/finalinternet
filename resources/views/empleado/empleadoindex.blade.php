@extends('layouts.paper')

@section('contenido')

<div class="row col-md-12">
    <div class="col-md-6">
		<h3 class="description">Listado de empleados</h3>
	</div>
  @cannot('create')
	<div class="col-md-6">
		<a href="{{ route('empleado.create') }}" style="float:right; "><button type="submit" class="btn btn-primary btn-round" style="margin-top: 0px;">Agregar Empleado</button></a>
	</div>
  @endcannot
</div>


<div class="col-md-12">
<div class="card">
  <div class="card-header">
    <h4 class="card-title"> Empleados </h4>
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
            Apellido
          </th>
          <th>
            Salario
          </th>
          <th>
            Edad
          </th>
          <th>
            Turno
          </th>
          <th  class="text-right">
          	Ver detalles
          </th>
        </thead>
        <tbody>
        @foreach ($empleados as $empleado)
			<tr>
				<td>{{$empleado->id}}</td>
				<td>{{$empleado->nombre}}</td>
				<td>{{$empleado->apellido}}</td>
        <td>{{$empleado->salario}}</td>
        <td>{{$empleado->edad}}</td>
        <td>{{$empleado->turno}}</td>

				<td  class="text-right"><a href="{{route('empleado.show', $empleado->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
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

          