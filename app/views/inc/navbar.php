<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  
   <!-- datatables -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  
  <style>
    .navGradient {
      background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
    }

    .navbar a {
      color: black;
      font-family: 'Lobster', cursive;
    }

    .navbar a:hover {
      color: turquoise;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg  navGradient mb-2" style="
            border-bottom-left-radius: 20px !important;">
    <a class="navbar-brand" href="#" style="font-family: 'Dancing Script', cursive;"><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon icon-bar"></span>
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
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/manage_rs_manager/">
              Manage</a>
          </li>
        <?php endif; ?>
      </ul>
      <ul class="navbar-nav ml-auto p-2 bd-highlight">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fas fa-sign-in-alt" style="font-family: Arial;"></i> Logout</a>

        </li>
      </ul>
    </div>
  </nav>
</body>

</html>