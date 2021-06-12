<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo SITENAME; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/showInfo/<?php echo $_SESSION['user_id']; ?>">My Data</a>
      </li>
      <?php if($_SESSION['user_role'] == 'ht_manager'): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/manage/">Manage</a>
      </li>
      <?php elseif($_SESSION['user_role'] == 'receptionist') : ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT; ?>/users/manage_rec/">Manage</a>
      </li>
      <?php endif; ?>
      <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
                </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>