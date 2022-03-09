  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{ asset('img/DeskApp.png') }}" alt="Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">DeskApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/Admin.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/dashboard" class="d-block fontStyle">Administrator</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link fontStyle">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/users" class="nav-link fontStyle">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/platinum" class="nav-link fontStyle">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Platinum
              </p>
            </router-link>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
