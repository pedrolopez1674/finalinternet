<h1>listado de departamentos</h1>

	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>DESCRIPCION</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($departamentos as $departamento)
			<tr>
				<td>{{$departamento->id}}</td>
				<td>
					<a href="{{route('departamento.show', $departamento->id) }}">{{$departamento->nombre}}</a>
				</td>
				<td>{{$departamento->descripcion}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>