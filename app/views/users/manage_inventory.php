<?php //require APPROOT . '/views/inc/header.php' 
?>
<?php require APPROOT . '/views/inc/navbar.php' ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: #e7e7e7;">
  <div class="container w-50 ">

    <div class="card rounded">
      <div class="card-body ">

        <h4 class="card-title">Manage Inventory</h4>

        <form action="<?php echo URLROOT . '/users/manage_inventory' ?>" method="post">
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" name="productName" value="<?php echo $data['productName'] ?>" class="form-control" id="formGroupExampleInput" placeholder="Product Name">
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">Quantity</label>
            <input type="text" name="Quantity" value="<?php echo $data['Quantity'] ?>" class="form-control" id="formGroupExampleInput" placeholder="Product Quantity">
          </div>

          <div class="row">
            <div class="form-group col">
              <label for="formGroupExampleInput">Price</label>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>

                <input type="text" name="purchasePrice" value="<?php echo $data['purchasePrice'] ?>" class="form-control" id="formGroupExampleInput" placeholder="Buying Price">
                <div class="input-group-append">
                  <span class="input-group-text">.00</span>
                </div>
              </div>
              <span class="invalid-feedback"><?php echo $data['price_error'] ?></span>


            </div>

          </div>







          <div class="form-row">
            <div class="col">
              <input type="radio" id="fst" name="Action" value="add">
              <label for="fst">Insertion</label>
            </div>
            <div class="col">
              <input type="radio" id="snd" name="Action" value="remove">
              <label for="snd">Withdrawal</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>


      </div>
    </div>



</body>

</html>

<?php require APPROOT . '/views/inc/footer.php' ?>