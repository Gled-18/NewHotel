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
            <div class="card-body card-block d-table-cel align-middle">
                <h4 class="card-title">Add Room Form</h4>

                <form action="<?php echo URLROOT . '/rooms/addRoom' ?>" method="post">

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="formGroupExampleInput">Room Number</label>
                            <input type="text" name="RoomNo" value="<?php echo $data['RoomNo'] ?>" id="formGroupExampleInput" placeholder="Enter Room Number" class="form-control 
                        <?php echo (!empty($data['RoomNo_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['RoomNo'] ?>">
                            <span class="invalid-feedback"><?php echo $data['RoomNo_error'] ?></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="formGroupExampleInput">Floor</label>
                            <input type="text" name="Floor" value="<?php echo $data['Floor'] ?>" id="formGroupExampleInput" placeholder="Enter Floor" class="form-control 
                        <?php echo (!empty($data['Floor_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['Floor'] ?>">
                            <span class="invalid-feedback"><?php echo $data['Floor_error'] ?></span>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col ">
                            <label for="exampleFormControlSelect1">Room Status</label>
                            <select class="form-control" id="exampleFormControlSelect1" name='Status'>
                                <option value='Available'>Available</option>
                                <option value='Occupied'>Occupied</option>
                                <option value='Reserved'>Reserved</option>
                                <option value='Out of Service'>Out of Service</option>
                            </select>
                        </div>

                        <div class="form-group col col-md-3">
                            <label for="exampleFormControlSelect1">Room Type</label>
                            <select class="form-control" id="exampleFormControlSelect1" name='typeID'>
                                <?php foreach ($data['type'] as $Room) : ?>
                                    <option value='<?php echo $Room->typeID; ?>'><?php echo $Room->typeName; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Price</label>
                        <input type="text" name="Price" value="<?php ?>" class="form-control" id="formGroupExampleInput" placeholder="" readonly>
                    </div><br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

</body>

</html>

<?php require APPROOT . '/views/inc/footer.php' ?>