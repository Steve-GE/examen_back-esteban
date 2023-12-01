<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">Examen</a>
    </header>
    <ul class="nav">
      <li>
        <a href="{{ route('empleados.index') }}" >
          <i class="zmdi zmdi-view-dashboard"></i> Ver Empleados
        </a>
      </li>
      <li>
        <a href="{{ route('empleados.create') }}" >
          <i class="zmdi zmdi-link"></i> Agregar Empleado
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-widgets"></i> 
        </a>
      </li>
      <li>
        <a href="#">
          <i class="zmdi zmdi-calendar"></i> 
        </a>
      </li>
       
      <li>
        <a href="#">
          <form method="POST" action="{{ url('/logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
        </a>
      </li>
    </ul>
  </div>
   
</div>