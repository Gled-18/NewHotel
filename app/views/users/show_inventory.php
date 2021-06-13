<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<table class="table table-striped ">
    <thead>
      <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Sell Price</th>
        <th>
          <a href="<?php echo URLROOT; ?>/users/addInventory">
            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add User" data-delay="0">
              <?php echo file_get_contents("C:/xampp/htdocs/NewHotel/app/assets/user-plus-solid.svg"); ?>
            </button>
          </a>
        </th>

      </tr>
    </thead>
    <?php foreach ($data['items'] as $item) : ?>
      <tr>
        <td><?php echo $item->productID; ?></td>
        <td><?php echo $item->productName; ?></td>
        <td><?php echo $item->productQuantity; ?></td>
        <td><?php echo $item->sellingPrice; ?></td>
        <!-- <td><a href="<?php echo URLROOT; ?>/users/editUser/<?php //echo $user->employeeID; ?>" class="btn btn-warning">Edit</a></td> -->
        <!-- <td><a href="<?php echo URLROOT; ?>/users/deleteUser/<?php //echo $user->employeeID; ?>" class="btn btn-danger">Remove</a></td> -->
      </tr>
    <?php endforeach; ?>
  </table>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>