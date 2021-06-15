<?php require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>

<form action="<?php echo URLROOT; ?>/users/editUser/<?php echo $data['employeeID']; ?>" method="post">
<div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" name="Name" value="<?php echo $data['name']?>" id="formGroupExampleInput" placeholder="Enter Name" class="form-control form-control-lg
    <?php echo (!empty($data['name_error'])) ? 'is-invalid': ''?>" value="<?php echo $data['name']?>">
    <span class="invalid-feedback"><?php echo $data['name_error']?></span>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Surname</label>
    <input type="text" name="Surname" value="<?php echo $data['surname']?>"  id="formGroupExampleInput" placeholder="Enter Surname" class="form-control form-control-lg
    <?php echo (!empty($data['name_error'])) ? 'is-invalid': ''?>" value="<?php echo $data['name']?>">
    <span class="invalid-feedback"><?php echo $data['surname_error']?></span>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Phone No</label>
    <input type="text" name="PhoneNo" value="<?php echo $data['phoneNo']?>" id="formGroupExampleInput" placeholder="" class="form-control form-control-lg>
    <?php echo (!empty($data['phoneNo_error'])) ? 'is-invalid': ''?>" value="<?php echo $data['phoneNo']?>">
    <span class="invalid-feedback"><?php echo $data['phoneNo_error']?></span>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Street No</label>
    <input type="text" name="StreetNo" value="<?php echo $data['streetNo']?>" id="formGroupExampleInput" placeholder="" class="form-control form-control-lg>
    <?php echo (!empty($data['streetNo_error'])) ? 'is-invalid': ''?>" value="<?php echo $data['streetNo']?>">
    <span class="invalid-feedback"><?php echo $data['streetNo_error']?></span>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Apartament NO</label>
    <input type="text" name="ApartamentNo" value="<?php echo $data['apartamentNo']?>" id="formGroupExampleInput" placeholder="" class="form-control form-control-lg>
    <?php echo (!empty($data['apartamentNo_error'])) ? 'is-invalid': ''?>" value="<?php echo $data['apartamentNo']?>">
    <span class="invalid-feedback"><?php echo $data['apartamentNo_error']?></span>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1" name='Role'>
      <option value='ht_manager'>Hotel Manager</option>
      <option value='rs_manager'>Restaurant Manager</option>
      <option value='waiter'>Waiter</option>
      <option value='receptionist'>Receptionist</option>
      <option value='other'>Other</option>
    </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Description</label>
    <input type="text" name="Descrition" value="<?php echo $data['description']?>" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="Email" value="<?php# echo $data['email']?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" class="form-control form-control-lg
                        <?php #echo (!empty($data['email_error'])) ? 'is-invalid': ''?>"
                               value="<?php #echo $data['email']?>">
                        <span class="invalid-feedback"><?php# echo $data['email_error']?></span>
    
  </div> -->
  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Password" value="<?php #echo $data['password']?>" class="form-control" id="exampleInputPassword1" placeholder="">
  </div> -->
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php require APPROOT . '/views/inc/footer.php'?>