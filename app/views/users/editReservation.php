<?php #require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<?php if($_SESSION['user_role'] != 'receptionist'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>

    <!-- <label for="birthday">Start Date:</label>
    <input type="date" id="stayStartDate" name="birthday">
    <label for="birthday">End Date:</label>
    <input type="date" id="stayEndDate" name="birthday"> -->
    <!-- <form action="users/reservations" method="post">
    <input type="text" name="clientName">
    <input type="submit" name="submit" value="Search">
    </form> -->
    <form action="<?php echo URLROOT;?>/users/editReservation/<?php echo $data['requestID'] ;?>" method="post">
        <!-- <div class="form-outline">
          <input type="search" id="clientName" class="form-control" placeholder="Client"
          aria-label="Search" name="clientName" />
        </div> -->
        <div class="form-group">
            <label for="formGroupExampleInput">Client Name</label>
            <input type="text" name="clientName" value="<?php echo $data['clientName']?>" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Client Surname</label>
            <input type="text" name="Surname" value="<?php echo $data['Surname']?>" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <br>
        <label for="birthday">Start Date:</label>
        <input type="date" id="stayStartDate" name="stayStartDate" value="<?php echo $data['stayStartDate']?>">

        <br><br>
        <label for="birthday">End Date:</label>
        <input type="date" id="stayEndDate" name="stayEndDate" value="<?php echo $data['stayEndDate']?>">
        <br><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="RoomID" name='RoomID'>

                <?php foreach ($data['Rooms'] as $Room) : ?>
                    <option value='<?php echo $Room->RoomID;?>'<?php if ($data['RoomID'] == $Room->RoomID) echo ' selected="selected"'; ?>><?php echo $Room->RoomNo;?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
<?php require APPROOT . '/views/inc/footer.php'; ?>