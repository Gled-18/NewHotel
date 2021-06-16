<?php //require APPROOT . '/views/inc/header.php' 
?>
<?php require APPROOT . '/views/inc/navbar.php' ?>
<?php if($_SESSION['user_role'] != 'ht_manager'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>

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

        <h4 class="card-title">Edit User Form</h4>

        <form action="<?php echo URLROOT; ?>/users/editUser/<?php echo $data['employeeID']; ?>" method="post">

          <div class="form-row">

            <div class="form-group required col">
              <label for="formGroupExampleInput" class="control-label">Name</label>
              <input type="text" name="Name" value="<?php echo $data['name'] ?>" id="formGroupExampleInput" placeholder="Enter Name" class="form-control <?php echo (!empty($data['name_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name'] ?>">
              <span class="invalid-feedback"><?php echo $data['name_error'] ?></span>
            </div>

            <div class="form-group required col">
              <label for="formGroupExampleInput" class="control-label">Surname</label>
              <input type="text" name="Surname" value="<?php echo $data['surname'] ?>" id="formGroupExampleInput" placeholder="Enter Surname" class="form-control <?php echo (!empty($data['name_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name'] ?>">
              <span class="invalid-feedback"><?php echo $data['surname_error'] ?></span>
            </div>

            <div class="form-group col">
              <label for="formGroupExampleInput">Phone No</label>
              <input type="text" name="PhoneNo" value="<?php echo $data['phoneNo'] ?>" id="formGroupExampleInput" placeholder="" class="form-control ><?php echo (!empty($data['phoneNo_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['phoneNo'] ?>">
              <span class="invalid-feedback"><?php echo $data['phoneNo_error'] ?></span>
            </div>

          </div>

          <div class="form-row">

            <div class="form-group col">
              <label for="formGroupExampleInput">Street No</label>
              <input type="text" name="StreetNo" value="<?php echo $data['streetNo'] ?>" id="formGroupExampleInput" placeholder="" class="form-control ><?php echo (!empty($data['streetNo_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['streetNo'] ?>">
              <span class="invalid-feedback"><?php echo $data['streetNo_error'] ?></span>
            </div>

            <div class="form-group col">
              <label for="formGroupExampleInput">Apartament NO</label>
              <input type="text" name="ApartamentNo" value="<?php echo $data['apartamentNo'] ?>" id="formGroupExampleInput" placeholder="" class="form-control ><?php echo (!empty($data['apartamentNo_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['apartamentNo'] ?>">
              <span class="invalid-feedback"><?php echo $data['apartamentNo_error'] ?></span>
            </div>

          </div>

          <div class="row">
            <div class="form-group required col">
              <label for="exampleFormControlSelect1" class="control-label">Role:</label>
              <select class="form-control" id="exampleFormControlSelect1" name="Role">
                <?php $position = array('ht_manager', 'rs_manager', 'waiter', 'receptionist', 'other'); ?>
                <?php foreach ($position as $Position) : ?>
                  <option value='<?php echo $Position; ?>' <?php if ($Position == $data['role']) echo ' selected="selected"'; ?>><?php echo $Position; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col">
              <label for="formGroupExampleInput">Description</label>
              <input type="text" name="Descrition" value="<?php echo $data['description'] ?>" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>

        </form>


      </div>
    </div>
  </div>


</body>

</html>


<!-- <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="Email" value="<? // php # echo $data['email']
                                            ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" class="form-control form-control-lg
                                            <?php #echo (!empty($data['email_error'])) ? 'is-invalid': ''
                                            ?>"
                                                   value="<?php #echo $data['email']
                                                          ?>">
                                            <span class="invalid-feedback"><? //php # echo $data['email_error']
                                                                            ?></span>
                        
                      </div> -->
<!-- <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="Password" value="<?php #echo $data['password']
                                                                      ?>" class="form-control" id="exampleInputPassword1" placeholder="">
                      </div> -->



<?php require APPROOT . '/views/inc/footer.php' ?>