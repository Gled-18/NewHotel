<?php require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>
<form action="<?php echo URLROOT.'/users/manage_inventory'?>" method="post">
<div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" name="productName" value="<?php echo $data['productName']?>" class="form-control" id="formGroupExampleInput" placeholder="Product Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Quantity</label>
    <input type="text" name="Quantity" value="<?php echo $data['Quantity']?>" class="form-control" id="formGroupExampleInput" placeholder="Product Quantity">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Price</label>
    <input type="text" name="purchasePrice" value="<?php echo $data['purchasePrice']?>" class="form-control" id="formGroupExampleInput" placeholder="Buying Price">
  </div>
  <input type="radio" id="fst" name="Action" value="add">
  <label for="fst">Insertion</label><br>
  <input type="radio" id="snd" name="Action" value="remove">
  <label for="snd">Withdrawal</label><br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require APPROOT . '/views/inc/footer.php'?>

