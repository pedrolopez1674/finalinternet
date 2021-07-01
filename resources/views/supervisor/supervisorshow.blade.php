@extends('layouts.paper')

@section('contenido')

	<div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Supervisor seleccionado</h4>
                <p class="card-category"> Supervisor seleccionado</p>
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
                        Editar
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$supervisor->id}}</td>
                        <td>{{$supervisor->nombre}}</td>
                        <td>{{$supervisor->Correo}}</td>
                        <td>{{$supervisor->salario}}</td>
                        <td>{{$supervisor->edad}}</td>

                        <td  class="text-right"><a href="{{route('supervisor.edit', $supervisor->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--button class="btn btn-primary btn-block" onclick="demo.showNotificationEliminado('bottom','center')">Bottom Center</button-->
                <form action="{{ route('supervisor.destroy',$supervisor) }}" method="POST">
					@csrf
					@method('DELETE')
					<center><button type="submit" class="btn btn-primary btn-round" style="background-color: red;">Eliminar Empleado</button></center>
					

				</form>
              </div>
            </div>
          </div>

@endsection