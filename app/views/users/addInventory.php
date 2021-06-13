<?php require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>
<form action="<?php echo URLROOT.'/users/addInventory'?>" method="post">
<div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" name="productName" value="<?php echo $data['productName']?>" class="form-control" id="formGroupExampleInput" placeholder="Name of Product">
  </div>
 
  <div class="form-group">
    <label for="formGroupExampleInput">Description</label>
    <input type="text" name="description" value="<?php echo $data['description']?>" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Sell Price</label>
    <input type="text" name="sellingPrice" value="<?php echo $data['sellingPrice']?>" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require APPROOT . '/views/inc/footer.php'?>



