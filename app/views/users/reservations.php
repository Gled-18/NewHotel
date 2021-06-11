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
<form action="<?php echo URLROOT.'/users/reservations';?>" method="post">
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
<input type="date" id="stayStartDate" name="stayStartDate" value="<?php echo $data['stayStartDate']?>">
<label for="birthday">Start Date:</label>
<?php var_dump($data['stayStartDate']); ?>
<?php var_dump($data['stayEndDate']); ?>
<input type="date" id="stayEndDate" name="stayEndDate" value="<?php echo $data['stayEndDate']?>">
<label for="birthday">End Date:</label>
<div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="RoomID" name='RoomIDNO'>
    
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