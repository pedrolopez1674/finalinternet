@extends('layouts.paper')

@section('contenido')

	<div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Departamento seleccionado</h4>
                <p class="card-category"> Departamento seleccionado</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        NOMBRE
                      </th>
                      <th>
                        DESCRIPCION
                      </th>
                      <th>
                        ADMINISTRADOR
                      </th>
                      <th class="text-right">
                        EDITAR
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          {{$departamento->id}}
                        </td>
                        <td>
                          {{$departamento->nombre}}
                        </td>
                        <td>
                          {{$departamento->descripcion}}
                        </td>
                        <td>
                          {{$departamento->user->name}}
                        </td>
                        <td class="text-right">
                          <a href="{{ route('departamento.edit', $departamento) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--button class="btn btn-primary btn-block" onclick="demo.showNotificationEliminado('bottom','center')">Bottom Center</button-->
                <form action="{{ route('departamento.destroy',$departamento) }}" method="POST">
					@csrf
					@method('DELETE')
					<center><button type="submit" class="btn btn-primary btn-round" style="background-color: red;">Eliminar departamento</button></center>
					

				</form>
              </div>
            </div>
          </div>



 <div class="col-md-12">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Agregar empleado a departamento</h5>
      </div>
      <div class="card-body">
       
      <form action="{{ route('departamento.store') }}" method="POST">
 
    @csrf
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nombre</label>
                <select class="form-control" name="empleado_id">
                  @foreach ()
                  <option value="">a</option>
                </select>
                
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="update ml-auto mr-auto">

          <button name="enviar" type="submit" class="btn btn-primary btn-round">Agregar empleado</button>
              
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>

@endsection