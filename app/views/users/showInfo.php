<?php #require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/navbar.php'; ?>
  
        <h1 class="display-3"><?php echo "Name: " . $data['name']; ?></h1>
        <p class="lead"><?php echo "ID: " .  $data['id']; ?></p>
        <p class="lead"><?php echo "Description: " .$data['description']; ?></p>
        <p class="lead"><?php echo "Phone no: " .$data['PhoneNo']; ?></p>
        <p class="lead"><?php echo "Role " . $data['Role']; ?></p>
        <p class="lead"><?php echo "Email " . $data['Email']; ?></p>

    <?php require APPROOT . '/views/inc/footer.php'; ?>
