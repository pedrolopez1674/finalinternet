@extends('layouts.paper')

@section('contenido')

<div class="row col-md-12">
    <div class="col-md-6">
      
		<h3 class="description">Listado de departamentos</h3>
	</div>
	<div class="col-md-6">
		<a href="{{ route('departamento.create') }}" style="float:right; "><button type="submit" class="btn btn-primary btn-round" style="margin-top: 0px;">Agregar departamento</button></a>
	</div>
</div>


<div class="col-md-12">
<div class="card">
  <div class="card-header">
    <h4 class="card-title"> Departamentos </h4>
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
          <!--th class="text-right"-->
          <th>
            Descripcion
          </th>
          <th>
            Administrador
          </th>
          <th  class="text-right">
          	Ver detalles
          </th>
        </thead>
        <tbody>
        @foreach ($departamentos as $departamento)
			<tr>
				<td>{{$departamento->id}}</td>
				<td>
					{{$departamento->nombre}}
				</td>
				<td>{{$departamento->descripcion}}</td>
        <td>
          {{$departamento->user->name}}
        </td>
				<td  class="text-right"><a href="{{route('departamento.show', $departamento->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
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

          