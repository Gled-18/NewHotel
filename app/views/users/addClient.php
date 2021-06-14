<?php require APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/inc/navbar.php' ?>
<form action="<?php echo URLROOT.'/users/addClient'?>" method="post">
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="clientName" value="<?php echo $data['clientName']?>" id="formGroupExampleInput" placeholder="Client Name" class="form-control form-control-lg
                        <?php echo (!empty($data['clientName_err'])) ? 'is-invalid': ''?>"
                               value="<?php echo $data['clientName']?>">
                        <span class="invalid-feedback"><?php echo $data['clientName_err']?></span>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Surname</label>
        <input type="text" name="Surname" value="<?php echo $data['Surname']?>" id="formGroupExampleInput" placeholder="Client Surname" class="form-control form-control-lg
                        <?php echo (!empty($data['Surname_err'])) ? 'is-invalid': ''?>"
                               value="<?php echo $data['Surname']?>">
                        <span class="invalid-feedback"><?php echo $data['Surname_err']?></span>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require APPROOT . '/views/inc/footer.php' ?>
