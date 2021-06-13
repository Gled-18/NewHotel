<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#"><?php echo SITENAME; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/showInfo/<?php echo $_SESSION['user_id']; ?>">My Data</a>
      </li>
      <?php if ($_SESSION['user_role'] == 'ht_manager') : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/manage/">Manage</a>
        </li>
      <?php elseif ($_SESSION['user_role'] == 'receptionist') : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/manage_rec/">Manage</a>
        </li>
      <?php elseif ($_SESSION['user_role'] == 'rs_manager') : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/manage_rs_manager/">Manage</a>
        </li>
      <?php endif; ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
      </li>
  </div>
</nav>
<!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Dropdown link
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link 1</a>
          <a class="dropdown-item" href="#">Link 2</a>
          <a class="dropdown-item" href="#">Link 3</a>
        </div>
      </li>
    </ul>
  </div>
</nav>