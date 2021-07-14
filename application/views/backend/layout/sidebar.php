<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url('dashboard') ?>"> <span class="logo-name">Rick Schultz</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'home' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('dashboard'); ?>" class="nav-link"><i data-feather="home"></i><span>Home</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'users' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('users'); ?>" class="nav-link"><i data-feather="users"></i><span>Users</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'marcas' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('restrita/marcas'); ?>" class="nav-link"><i data-feather="layers"></i><span>Profile</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'marcas' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('restrita/marcas'); ?>" class="nav-link"><i data-feather="layers"></i><span>Work Experiences</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'marcas' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('restrita/marcas'); ?>" class="nav-link"><i data-feather="layers"></i><span>Study</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'marcas' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('restrita/marcas'); ?>" class="nav-link"><i data-feather="layers"></i><span>Courses</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'marcas' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('restrita/marcas'); ?>" class="nav-link"><i data-feather="layers"></i><span>References</span></a>
      </li>

    </ul>
  </aside>
</div>