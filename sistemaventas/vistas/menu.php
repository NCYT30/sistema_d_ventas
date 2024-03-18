   <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Brand Logo -->
       <a href="index3.html" class="brand-link">

           <span class="brand-text font-weight-light">system pos</span>
       </a>



       <!-- Sidebar -->
       <div class="sidebar">
           <!-- Sidebar user panel (optional) -->
           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="<?php echo "../files/usuarios/".$_SESSION['imagen'] ?>" class="img-circle elevation-2"
                       alt="User Image">
               </div>
               <div class="info">
                   <a href="#" class="d-block"><?php echo $_SESSION['nombre'] ?></a>
               </div>
           </div>

           <!-- SidebarSearch Form -->
           <div class="form-inline">
               <div class="input-group" data-widget="sidebar-search">
                   <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                   <div class="input-group-append">
                       <button class="btn btn-sidebar">
                           <i class="fas fa-search fa-fw"></i>
                       </button>
                   </div>
               </div>
           </div>

           <!-- Sidebar Menu -->
           <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                   data-accordion="false">
                   <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                   <li class="nav-item">
                       <a href="pages/widgets.html" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                               tablero
                               <span class="right badge badge-danger">New</span>
                           </p>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                               almacen

                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/layout/top-nav.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>articulos</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>categorias</p>
                               </a>
                           </li>


                       </ul>
                   </li>


                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                               compras

                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/layout/top-nav.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>ingresos</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>proveedores</p>
                               </a>
                           </li>


                       </ul>
                   </li>



                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                               ventas

                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/layout/top-nav.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>ventas</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>clientes</p>
                               </a>
                           </li>


                       </ul>
                   </li>


                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                               permisos

                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/layout/top-nav.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>usuarios</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>permisos</p>
                               </a>
                           </li>


                       </ul>
                   </li>

                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                               consultar compras


                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/layout/top-nav.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>consultar compras</p>
                               </a>
                           </li>



                       </ul>
                   </li>

                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                               consultar ventas

                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="pages/layout/top-nav.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>consultar ventas</p>
                               </a>
                           </li>



                       </ul>
                   </li>








               </ul>
           </nav>
           <!-- /.sidebar-menu -->
       </div>
       <!-- /.sidebar -->
   </aside>