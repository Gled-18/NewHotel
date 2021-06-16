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
            <div class="card-body card-block d-table-cel align-middle">

                <h4 class="card-title">Add Reservation</h4>

                <form action="<?php echo URLROOT . '/users/addClient' ?>" method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" name="clientName" value="<?php echo $data['clientName'] ?>" id="formGroupExampleInput" placeholder="Client Name" class="form-control form-control-lg
                        <?php echo (!empty($data['clientName_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['clientName'] ?>">
                        <span class="invalid-feedback"><?php echo $data['clientName_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Surname</label>
                        <input type="text" name="Surname" value="<?php echo $data['Surname'] ?>" id="formGroupExampleInput" placeholder="Client Surname" class="form-control form-control-lg
                        <?php echo (!empty($data['Surname_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['Surname'] ?>">
                        <span class="invalid-feedback"><?php echo $data['Surname_err'] ?></span>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>


<?php require APPROOT . '/views/inc/footer.php' ?>