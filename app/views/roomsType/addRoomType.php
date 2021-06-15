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
    <style>
        .form-group.required .control-label:after {
            content: "*";
            color: red;
        }
    </style>

</head>

<body style="background-color: #e7e7e7;">


    <div class="container w-50 ">

        <div class="card rounded">
            <div class="card-body">
                <h4 class="card-title ">Add Room Type</h4>

                <form action="<?php echo URLROOT . '/roomsType/addRoomType' ?>" method="post">
                    <div class="row">

                        <div class="form-group col">
                            <label for="formGroupExampleInput">Type</label>
                            <input type="text" name="typeName" value="<?php echo $data['typeName']; ?>" id="formGroupExampleInput" placeholder="Enter Type Name" class="form-control ><?php echo (!empty($data['typeName_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['typeName'] ?>">
                            <span class="invalid-feedback"><?php echo $data['typeName_error'] ?></span>
                        </div>


                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label for="formGroupExampleInput">Price</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>

                                <input type="text" name="price" value="<?php echo $data['price']; ?>" id="formGroupExampleInput" placeholder="Enter Price" class="form-control ><?php echo (!empty($data['price_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['price'] ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <span class="invalid-feedback"><?php echo $data['price_error'] ?></span>




                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>






            </div>
        </div>

</body>

</html>







<?php require APPROOT . '/views/inc/footer.php' ?>