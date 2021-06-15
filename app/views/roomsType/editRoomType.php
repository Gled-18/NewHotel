<?php require APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/inc/navbar.php' ?>


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


<form action="<?php echo URLROOT; ?>/roomsType/editRoomType/<?php echo $data['typeID']; ?>" method="post">
    <div class="form-group">
        <label for="formGroupExampleInput">Type</label>
        <input type="text" name="typeName" value="<?php echo $data['typeName']; ?>" id="formGroupExampleInput" placeholder="Enter Type Name" class="form-control form-control-lg>
    <?php echo (!empty($data['typeName_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['typeName'] ?>">
        <span class="invalid-feedback"><?php echo $data['typeName_error'] ?></span>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Price</label>
        <input type="text" name="price" value="<?php echo $data['price']; ?>" id="formGroupExampleInput" placeholder="Enter Price" class="form-control form-control-lg>
    <?php echo (!empty($data['price_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['price'] ?>">
        <span class="invalid-feedback"><?php echo $data['price_error'] ?></span>
    </div>
    <br><br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php require APPROOT . '/views/inc/footer.php' ?>