<h1>departamento seleccionado</h1>

<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>DESCRIPCION</th>
				<th>EDITAR</th>
			</tr>
		</thead>
		<tbody>
			
			<tr>
				<td>{{$departamento->id}}</td>
				<td>{{$departamento->nombre}}</td>
				<td>{{$departamento->descripcion}}</td>
				<td><a href="{{ route('departamento.edit', $departamento) }}"> editar </a></td>
			</tr>

		</tbody>
	</table>

	<form action="{{ route('departamento.destroy',$departamento) }}" method="POST">
	@csrf
	@method('DELETE')
	<input type="submit" value="Eliminar departamento">

	</form>

