
<li class="treeview">
    <a href="#">
      <i class="fa fa-commenting"></i> <span>Administrador</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('colors*') ? 'active' : '' }}">
            <a href="{{ route('colors.index') }}"><i class="fa fa-edit"></i><span>Colores</span></a>
        </li>
        
        <li class="{{ Request::is('modelos*') ? 'active' : '' }}">
            <a href="{{ route('modelos.index') }}"><i class="fa fa-edit"></i><span>Modelos</span></a>
        </li>
        
        <li class="{{ Request::is('defectos*') ? 'active' : '' }}">
            <a href="{{ route('defectos.index') }}"><i class="fa fa-edit"></i><span>Defectos</span></a>
        </li>
        
        <li class="{{ Request::is('turnos*') ? 'active' : '' }}">
            <a href="{{ route('turnos.index') }}"><i class="fa fa-edit"></i><span>Turnos</span></a>
        
        </li>
      
      
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-laptop"></i>
      <span>Sup. y Lineas</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">

        

<li class="{{ Request::is('logins*') ? 'active' : '' }}">
    <a href="{{ route('logins.index') }}"><i class="fa fa-edit"></i><span>Supervisores de calidad</span></a>
</li>



<li class="{{ Request::is('lineaDeProduccions*') ? 'active' : '' }}">
    <a href="{{ route('lineaDeProduccions.index') }}"><i class="fa fa-edit"></i><span>Lineas de Produccion</span></a>
</li>

<li class="{{ Request::is('ordenDeProduccions*') ? 'active' : '' }}">
    <a href="{{ route('ordenDeProduccions.index') }}"><i class="fa fa-edit"></i><span>Ordenes de Produccion</span></a>
</li>
     
    </ul>
  </li>

  <li class="treeview">
    <a href="#">
      <i class="fa fa-shopping-cart"></i>
      <span>Controles</span>
       <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('parDeSegundas*') ? 'active' : '' }}">
            <a href="{{ route('parDeSegundas.index') }}"><i class="fa fa-edit"></i><span>Par De Segundas</span></a>
        </li>
        
        
        
        <li class="{{ Request::is('parHermanados*') ? 'active' : '' }}">
            <a href="{{ route('parHermanados.index') }}"><i class="fa fa-edit"></i><span>Par Hermanados</span></a>
        </li>
        
        <li class="{{ Request::is('parDePrimeras*') ? 'active' : '' }}">
            <a href="{{ route('parDePrimeras.index') }}"><i class="fa fa-edit"></i><span>Pares De Primera</span></a>
        </li>
        
        <li class="{{ Request::is('inspecciones*') ? 'active' : '' }}">
            <a href="{{ route('inspecciones.index') }}"><i class="fa fa-edit"></i><span>Asignar Linea</span></a>
        </li>
        
        <li class="{{ Request::is('revisions*') ? 'active' : '' }}">
            <a href="{{ route('revisions.index') }}"><i class="fa fa-edit"></i><span>Revisiones</span></a>
        </li>
        
     
    </ul>
  </li>






