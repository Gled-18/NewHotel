<?php require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>

<form action="<?php echo URLROOT; ?>/users/editUser/<?php echo $data['employeeID']; ?>" method="post">
<div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" name="Name" value="<?php echo $data['name']?>" class="form-control" id="formGroupExampleInput" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Surname</label>
    <input type="text" name="Surname" value="<?php echo $data['surname']?>" class="form-control" id="formGroupExampleInput" placeholder="Enter Surname">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Phone No</label>
    <input type="text" name="PhoneNo" value="<?php echo $data['phoneNo']?>" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Street No</label>
    <input type="text" name="StreetNo" value="<?php echo $data['streetNo']?>" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Apartament NO No</label>
    <input type="text" name="ApartamentNo" value="<?php echo $data['apartamentNo']?>" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Role">
      <option>Hotel Manager</option>
      <option>Restaurant Manager</option>
      <option>Waiter</option>
      <option>Receptionist</option>
      <option>Other</option>
    </select>
    </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Description</label>
    <input type="text" name="Descrition" value="<?php echo $data['description']?>" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="Email" value="<?php echo $data['email']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Password" value="<?php echo $data['password']?>" class="form-control" id="exampleInputPassword1" placeholder="">
  </div> -->
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php require APPROOT . '/views/inc/footer.php'?>