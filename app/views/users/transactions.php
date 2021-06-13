<?php require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>

<div class="input-group rounded">

  </span>
</div>
<table class="table table-striped ">
    <thead>
      <tr>
        <th>Transaction ID</th>
        <th>Product Name</th>
        <th>Employee ID</th>
        <th>Date</th>
        <th>Quantity</th>
        <th>Cost</th>
        <th>
          <a href="<?php echo URLROOT; ?>/users/addInventory">
            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add User" data-delay="0">
              <?php echo file_get_contents("C:/xampp/htdocs/NewHotel/app/assets/user-plus-solid.svg"); ?>
            </button>
          </a>
        </th>
      </tr>
    </thead>
    <?php foreach ($data['transactions'] as $transacion) : ?>
    <?php $var1 = $transacion->Quantity; ?>
    <?php $var2 = $transacion->purchasePrice; ?>
    <?php $var1 = $var1 + 0; ?>
    <?php $var2 = $var2 + 0; ?>
      <tr>
        <td><?php echo $transacion->transactionID; ?></td>
        <td><?php echo $transacion->productName; ?></td>
        <td><?php echo $transacion->employeeID; ?></td>
        <td><?php echo $transacion->manageSuppliesDate; ?></td>
        <td><?php echo $transacion->Quantity; ?></td>
        <?php if($transacion->action == "add") : ?>
          <td><?php echo $var3 = $var1 * $var2; ?></td>
        <?php else : ?>
          <td><?php echo 0; ?></td>
        <?php endif; ?>
    <?php $var1 = 0; ?>
    <?php $var2 = 0; ?>
        <!-- <td><a href="<?php echo URLROOT; ?>/users/editUser/<?php //echo $user->employeeID; ?>" class="btn btn-warning">Edit</a></td> -->
        <!-- <td><a href="<?php echo URLROOT; ?>/users/deleteUser/<?php //echo $user->employeeID; ?>" class="btn btn-danger">Remove</a></td> -->
      </tr>
    <?php endforeach; ?>
  </table>

  <!-- <a href="users/transaction" class="previous round">Show All Transactions</a> -->
  <form action="transactions" method ='post'>
          <input type="submit" value="Show All Transactions">
  </form>
  <a href="<?php echo URLROOT?>/users/transactions">Show Less</a>
</div>




<?php require APPROOT . '/views/inc/footer.php'?>
