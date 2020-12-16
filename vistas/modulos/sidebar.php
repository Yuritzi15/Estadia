  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="vistas/dist/img/Tractor.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Concretos</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
             <i class="nav-icon fas fa-box"></i>
              <p>
                Inventario-Piezas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="inventario" class="nav-link">
                <i class="nav-icon far fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="agregar" class="nav-link">
               <i class=" nav-icon far fa-plus-square"></i>
                  <p>Agregar</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="eliminar" class="nav-link">
               <i class=" nav-icon far fa-trash-alt"></i>
                  <p>Eliminar</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="editar" class="nav-link">
               <i class=" nav-icon far fa-edit"></i>
                  <p>Editar</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Personal
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="VerPersonal" class="nav-link">
                <i class="nav-icon fas fa-people-carry"></i>
                  <p>Ver personal</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="GuardarPersonal" class="nav-link">
                <i class="nav-icon fas fa-user-plus"></i>
                  <p>Agregar personal</p>
                </a>
              </li>
            </ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="EliminarPersonal" class="nav-link">
               <i class="nav-icon fas fa-user-minus"></i>
                  <p>Eliminar Personal</p>
                </a>
              </li>
            </ul>
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="EditarPersonal" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
                  <p>Editar Personal</p>
                </a>
              </li>
            </ul>
          </li>

         <li class="nav-header">Categorías</li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i> 
              <p>
                Opciones
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adcatP" class="nav-link">
                  <i class="nav-icon fas fa-balance-scale"></i> 
                  <p>Añadir categoría producto</p>
                </a>
              </li>
            </ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="elcatP" class="nav-link">
                  <i class="nav-icon fas fa-balance-scale"></i> 
                  <p>Borrar categoría producto</p>
                </a>
              </li>
            </ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adcatCPU" class="nav-link">
                  <i class="nav-icon fas fa-id-card-alt"></i> 
                  <p>Añadir categoría puesto</p>
                </a>
              </li>
            </ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="elcatCPU" class="nav-link">
                  <i class="nav-icon fas fa-id-card-alt"></i> 
                  <p>Borrar categoría puesto</p>
                </a>
              </li>
            </ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adcatPr" class="nav-link">
                  <i class="nav-icon far fa-id-card"></i> 
                  <p>Agregar proveedores</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="elcatPr" class="nav-link">
                  <i class="nav-icon far fa-id-card"></i> 
                  <p>Eliminar proveedores</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Sesiones</li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Menú
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="cerrar" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Cerrar sesión</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
