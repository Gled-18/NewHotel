<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

    <!-- <label for="birthday">Start Date:</label>
    <input type="date" id="stayStartDate" name="birthday">
    <label for="birthday">End Date:</label>
    <input type="date" id="stayEndDate" name="birthday"> -->
    <!-- <form action="users/reservations" method="post">
    <input type="text" name="clientName">
    <input type="submit" name="submit" value="Search">
    </form> -->
    <form action="<?php echo URLROOT.'/users/addReservation';?>" method="post">
        <!-- <div class="form-outline">
          <input type="search" id="clientName" class="form-control" placeholder="Client"
          aria-label="Search" name="clientName" />
        </div> -->
        <div class="form-group">
            <label for="formGroupExampleInput">Client Name</label>
            <input type="text" name="clientName" value="<?php echo $data['clientName']?>" id="formGroupExampleInput" placeholder="" class="form-control form-control-lg
                        <?php echo (!empty($data['clientName_err'])) ? 'is-invalid': ''?>"
                               value="<?php echo $data['clientName']?>">
                        <span class="invalid-feedback"><?php echo $data['clientName_err']?></span>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Client Surname</label>
            <input type="text" name="Surname" value="<?php echo $data['Surname']?>" id="formGroupExampleInput" placeholder="" class="form-control form-control-lg
                        <?php echo (!empty($data['Surname_err'])) ? 'is-invalid': ''?>"
                               value="<?php echo $data['Surname']?>">
                        <span class="invalid-feedback"><?php echo $data['Surname_err']?></span>
        </div>
        <br>
        <label for="birthday">Start Date:</label>
        <input type="date" id="stayStartDate" name="stayStartDate" value="<?php echo $data['stayStartDate']?>"class="form-control form-control-lg
                        <?php echo (!empty($data['stayStartDate_err'])) ? 'is-invalid': ''?>"
                               value="<?php echo $data['stayStartDate']?>">
                        <span class="invalid-feedback"><?php echo $data['stayStartDate_err']?></span>

        <br><br>
        <label for="birthday">End Date:</label>
        <input type="date" id="stayEndDate" name="stayEndDate" value="<?php echo $data['stayEndDate']?>" class="form-control form-control-lg
                        <?php echo (!empty($data['stayEndDate_err'])) ? 'is-invalid': ''?>"
                               value="<?php echo $data['stayEndDate']?>">
                        <span class="invalid-feedback"><?php echo $data['stayEndDate_err']?></span>
        <br><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Room</label>
            <select  id="RoomID" name='RoomIDNO' class="form-control"> 
            <!-- form-control-lg
                        <?php #echo (!empty($data['RoomIDNO_err'])) ? 'is-invalid': ''?>"
                               > -->
                               <!-- value="<?php #echo $data['RoomIDNO']?>" -->
                        <!-- <span class="invalid-feedback"><?php# echo $data['RoomIDNO_err']?></span>
                        <option value='val'></option> -->
                <?php foreach ($data['RoomsIDNO'] as $RoomsIDNO) : ?>

                    <?php $RoomID = strval($RoomsIDNO->RoomID); ?>
                    <?php $myStr1 = strval($RoomsIDNO->RoomNo); ?>
                    <?php var_dump($myStr); ?>
                    <?php var_dump($myStr1); ?>
                    <?php var_dump($RoomsIDNO); ?>



                    <option value='<?php echo $RoomID ?>'><?php echo $myStr1;?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
<?php require APPROOT . '/views/inc/footer.php'; ?>