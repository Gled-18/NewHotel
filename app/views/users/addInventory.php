<?php //require APPROOT . '/views/inc/header.php' 
?>
<?php require APPROOT . '/views/inc/navbar.php' ?>
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

  <style>
    .form-group.required .control-label:after {
      content: "*";
      color: red;
    }
  </style>



</head>

<body style="background-color: #e7e7e7;">


  <div class="container w-50 ">

    <div class="card  rounded">
      <div class="card-body ">

        <h4 class="card-title">Add Inventory Form</h4>
        <form action="<?php echo URLROOT . '/users/addInventory' ?>" method="post">
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" name="productName" value="<?php echo $data['productName'] ?>" class="form-control" id="formGroupExampleInput" placeholder="Name of Product">
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">Description</label>
            <input type="" name="description" value="<?php echo $data['description'] ?>" class="form-control" id="formGroupExampleInput" placeholder="">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Sell Price</label>
            <input type="text" name="sellingPrice" value="<?php echo $data['sellingPrice'] ?>" class="form-control" id="formGroupExampleInput" placeholder="">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>

</body>

</html>



<?php require APPROOT . '/views/inc/footer.php' ?>