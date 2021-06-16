<?php //require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>
<?php if($_SESSION['user_role'] != 'ht_manager'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>
<div>
    <h1>DELETE User</h1>
    <p>Are you sure you want to delete user <b><?php echo $data['Name']." ".$data['Surname']?></b>?</p>
    <form action="<?php echo URLROOT; ?>/users/deleteUser/<?php echo $data['employeeID'];?>" method="post">
      <div>
        <input type="submit" name="commit" value="Delete <?php echo $data['Name']?>" />
      </div>
    </form>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'?>