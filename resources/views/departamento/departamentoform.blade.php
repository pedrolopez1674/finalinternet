@if(isset($departamento))
	<form action="{{ route('departamento.update' , $departamento) }}" method="POST">
	@method('PATCH')
@else
	<form action="{{ route('departamento.store') }}" method="POST">
@endif	
		@csrf
		<label for="Nombre">Nombre:</label>
		<input type="text" name="nombre" value="{{ $departamento->nombre ?? '' }}"><br>

		<label for="descripcion">Descripcion:</label>
		<textarea name="descripcion" id="descripcion" cols="30" rows="5" >{{  $departamento->descripcion ?? '' }}</textarea><br>

		<input type="submit" name="enviar" value="enviar">

	</form>