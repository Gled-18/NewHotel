<?php require APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/inc/navbar.php' ?>
<form action="<?php echo URLROOT;?>/users/editClient/<?php echo $data['clientID'] ;?>" method="post">
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="clientName" value="<?php echo $data['clientName']?>" class="form-control" id="formGroupExampleInput" placeholder="Client Name">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Surname</label>
        <input type="text" name="Surname" value="<?php echo $data['Surname']?>" class="form-control" id="formGroupExampleInput" placeholder="Client Surname">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require APPROOT . '/views/inc/footer.php' ?>



