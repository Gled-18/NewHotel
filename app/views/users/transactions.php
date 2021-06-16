<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<?php if($_SESSION['user_role'] != 'rs_manager'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<body>

  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Transaction ID</th>
        <th>Product Name</th>
        <th>Employee ID</th>
        <th>Date</th>
        <th>Quantity</th>
        <th>Cost</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['transactions'] as $transacion) : ?>
        <?php $var1 = $transacion->Quantity; ?>
        <?php $var2 = $transacion->purchasePrice; ?>
        <?php $var1 = $var1 + 0; ?>
        <?php $var2 = $var2 + 0; ?>
        <?php $var2 = $var2 + 0; ?>
        <tr>
          <td><?php echo $transacion->transactionID; ?></td>
          <td><?php echo $transacion->productName; ?></td>
          <td><?php echo $transacion->employeeID; ?></td>
          <td><?php echo $transacion->manageSuppliesDate; ?></td>
          <td><?php echo $transacion->Quantity; ?></td>
          <?php if ($transacion->action == "add") : ?>
            <td><?php echo $var3 = $var1 * $var2; ?></td>
          <?php else : ?>
            <td><?php echo 0; ?></td>
          <?php endif; ?>
          <?php $var1 = 0; ?>
          <?php $var2 = 0; ?>
          <!-- <td><a href="<?php echo URLROOT; ?>/users/editUser/<?php //echo $user->employeeID; 
                                                                  ?>" class="btn btn-warning">Edit</a></td> -->
          <!-- <td><a href="<?php echo URLROOT; ?>/users/deleteUser/<?php //echo $user->employeeID; 
                                                                    ?>" class="btn btn-danger">Remove</a></td> -->
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <br>
  <br>
  <br>

</body>

</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>