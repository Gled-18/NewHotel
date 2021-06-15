<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<body>

</body>

</html>


<table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Product ID</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Sell Price</th>
      <th>
        <a href="<?php echo URLROOT; ?>/users/addInventory">
          <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add Inventory" data-delay="0">
            <i class="fas fa-user-plus"></i>
          </button>
        </a>
      </th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($data['items'] as $item) : ?>
      <tr>

        <td><?php echo $item->productID; ?></td>
        <td><?php echo $item->productName; ?></td>
        <td><?php echo $item->productQuantity; ?></td>
        <td><?php echo $item->sellingPrice; ?></td>
        <!-- <td><a href="<?php echo URLROOT; ?>/users/editUser/<?php //echo $user->employeeID; 
                                                                ?>" class="btn btn-warning">Edit</a></td> -->
        <!-- <td><a href="<?php echo URLROOT; ?>/users/deleteUser/<?php //echo $user->employeeID; 
                                                                  ?>" class="btn btn-danger">Remove</a></td> -->
      </tr>
    <?php endforeach; ?>

  </tbody>

</table>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>