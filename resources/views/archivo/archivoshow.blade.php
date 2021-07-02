@extends('layouts.paper')

@section('contenido')

	<div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Empleado seleccionado</h4>
                <p class="card-category"> Empleado seleccionado</p>
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
                        Editar
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$empleado->id}}</td>
                        <td>{{$empleado->nombre}}</td>
                        <td>{{$empleado->apellido}}</td>
                        <td>{{$empleado->salario}}</td>
                        <td>{{$empleado->edad}}</td>
                        <td>{{$empleado->turno}}</td>

                        <td  class="text-right"><a href="{{route('empleado.edit', $empleado->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--button class="btn btn-primary btn-block" onclick="demo.showNotificationEliminado('bottom','center')">Bottom Center</button-->
                <form action="{{ route('empleado.destroy',$empleado) }}" method="POST">
					@csrf
					@method('DELETE')
					 @cannot('delete')<center><button type="submit" class="btn btn-primary btn-round" style="background-color: red;">Eliminar Empleado</button></center>@endcannot
					

				</form>
              </div>
            </div>
          </div>

@endsection