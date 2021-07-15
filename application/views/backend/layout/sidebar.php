<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url('dashboard') ?>"> <span class="logo-name">Rick Schultz</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Curriculum Structure</li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'home' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('dashboard'); ?>" class="nav-link"><i data-feather="home"></i><span>Home</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'users' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('users'); ?>" class="nav-link"><i data-feather="users"></i><span>Users</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'aboutme' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('about-me'); ?>" class="nav-link"><i data-feather="user"></i><span>About Me</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'education' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('education'); ?>" class="nav-link"><i data-feather="book-open"></i><span>Education</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'workexperience' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('work-experience'); ?>" class="nav-link"><i data-feather="briefcase"></i><span>Work Experience</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'courses' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('courses'); ?>" class="nav-link"><i data-feather="monitor"></i><span>Courses</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'skills' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('skills'); ?>" class="nav-link"><i data-feather="trending-up"></i><span>Skills</span></a>
      </li>

      <li class="dropdown <?php echo $this->router->fetch_class() == 'references' && $this->router->fetch_method() == 'index' ? 'active' : ''; ?>">
        <a href="<?php echo base_url('references'); ?>" class="nav-link"><i data-feather="user-check"></i><span>References</span></a>
      </li>

    </ul>
  </aside>
</div>