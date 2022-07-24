 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index.php" class="brand-link">
         <img src="vistas/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Maycar</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar Menu -->
         <nav class="mt-2">

             <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

                 <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/dashboard.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Tablero Principal
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/clientes.php','content-wrapper')">
                         <i class="nav-icon fas fa-chart-line text-ligth"></i>
                         <p>
                             Clientes
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/clientes2.php','content-wrapper')">
                         <i class="nav-icon fas fa-chart-line text-ligth"></i>
                         <p>
                             Clientes Test
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-store-alt"></i>
                         <p>Employees<i class="right fas fa-angle-left"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link" style="cursor:pointer;" onclick="CargarContenido('vistas/employeesget.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>GET</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link" style="cursor:pointer;" onclick="CargarContenido('vistas/employeespost.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>POST</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link" style="cursor:pointer;" onclick="CargarContenido('vistas/employeesput.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>PUT</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link" style="cursor:pointer;" onclick="CargarContenido('vistas/employeesdelete.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>DELETE</p>
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

 <script>
     $(".nav-link").on('click', function() {
         $(".nav-link").removeClass('active');
         $(this).addClass('active');
     })
 </script>