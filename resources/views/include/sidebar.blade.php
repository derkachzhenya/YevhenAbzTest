 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">

     <span class="brand-text brand-link font-weight-light text-center">
         <h3>{{ __('Test task') }}</h3>
     </span>

     <!-- Sidebar -->
     <div class="sidebar">

         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                 <li class="nav-item">
                     <a href="{{ route('employes.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-users"></i>
                         <p>
                             {{ __('Employees') }}
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="{{ route('positions.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-book"></i>
                         <p>
                             {{ __('Positions') }}
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
     <!-- /.sidebar -->
 </aside>
