<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<!-- <label for="birthday">Start Date:</label>
    <input type="date" id="stayStartDate" name="birthday">
    <label for="birthday">End Date:</label>
    <input type="date" id="stayEndDate" name="birthday"> -->
<!-- <form action="users/reservations" method="post">
    <input type="text" name="clientName">
    <input type="submit" name="submit" value="Search">
    </form> -->
    <?php if($_SESSION['user_role'] != 'receptionist'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>

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


                <form action="<?php echo URLROOT . '/users/addReservation'; ?>" method="post">

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="formGroupExampleInput">Client Name</label>
                            <input type="text" name="clientName" value="<?php echo $data['clientName'] ?>" id="formGroupExampleInput" placeholder="" class="form-control form-control-lg
                        <?php echo (!empty($data['clientName_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['clientName'] ?>">
                            <span class="invalid-feedback"><?php echo $data['clientName_err'] ?></span>
                        </div>
                        <div class="form-group col">
                            <label for="formGroupExampleInput">Client Surname</label>
                            <input type="text" name="Surname" value="<?php echo $data['Surname'] ?>" id="formGroupExampleInput" placeholder="" class="form-control form-control-lg
                        <?php echo (!empty($data['Surname_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['Surname'] ?>">
                            <span class="invalid-feedback"><?php echo $data['Surname_err'] ?></span>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="birthday">Start Date:</label>
                            <input type="date" id="stayStartDate" name="stayStartDate" value="<?php echo $data['stayStartDate'] ?>" class="form-control form-control-lg
                        <?php echo (!empty($data['stayStartDate_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['stayStartDate'] ?>">
                            <span class="invalid-feedback"><?php echo $data['stayStartDate_err'] ?></span>
                        </div>
                        <div class="form-group col">
                            <label for="birthday">End Date:</label>
                            <input type="date" id="stayEndDate" name="stayEndDate" value="<?php echo $data['stayEndDate'] ?>" class="form-control form-control-lg
                        <?php echo (!empty($data['stayEndDate_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['stayEndDate'] ?>">
                            <span class="invalid-feedback"><?php echo $data['stayEndDate_err'] ?></span>
                            <br><br>
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="exampleFormControlSelect1">Select Room</label>
                        <select id="RoomID" name='RoomIDNO' class="form-control">

                            <?php foreach ($data['RoomsIDNO'] as $RoomsIDNO) : ?>

                                <?php $RoomID = strval($RoomsIDNO->RoomID); ?>
                                <?php $myStr1 = strval($RoomsIDNO->RoomNo); ?>
                                <?php //var_dump($myStr); ?>
                                <?php //var_dump($myStr1); ?>
                                <?php //var_dump($RoomsIDNO); ?>



                                <option value='<?php echo $RoomID ?>'><?php echo $myStr1; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>



            </div>
        </div>
    </div>

</body>

</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>