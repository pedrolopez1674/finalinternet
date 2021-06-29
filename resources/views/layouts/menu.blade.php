<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          <div class="logo-image-big">
            <img src="{{asset('img/logo.png')}}">
          </div>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class=" ">
            <a href="{{ route('departamento.index') }}">
              <i class="fa fa-building" aria-hidden="true"></i>
              <p>Departamento</p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <i class="fa fa-user" aria-hidden="true"></i>
              <p>Jefes de departamente</p>
            </a>
          </li>
          <li>
            <a href="{{ route('empleado.index') }}">
              <i class="fa fa-users" aria-hidden="true"></i>
              <p>Empleados</p>
            </a>
          </li>
        </ul>
      </div>
    </div>