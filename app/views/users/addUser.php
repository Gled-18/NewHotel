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


  <style>
    .form-group.required .control-label:after {
      content: "*";
      color: red;
    }
  </style>
</head>

<body style="background-color: #e7e7e7;">


  <div class="container w-50 ">

    <div class="card  rounded">
      <div class="card-body ">

        <h4 class="card-title">Add User Form</h4>


        <form action="" method="post" class="">

          <div class="form-row">

            <div class="form-group required col">
              <label for="formGroupExampleInput" class="control-label">Name</label>
              <input type="text" name="Name" value="<?php echo $data['name'] ?>" id="formGroupExampleInput" placeholder="Enter Name" class="form-control <?php echo (!empty($data['name_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name'] ?>">
              <span class="invalid-feedback"><?php echo $data['name_error'] ?></span>
            </div>


            <div class="form-group required col">
              <label for="formGroupExampleInput" class="control-label">Surname</label>
              <input type="text" name="Surname" value="<?php echo $data['surname'] ?>" id="formGroupExampleInput" placeholder="Enter Surname" class="form-control ><?php echo (!empty($data['surname_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['surname'] ?>">
              <span class="invalid-feedback"><?php echo $data['surname_error'] ?></span>
            </div>

            <div class="form-group  col">
              <label for="formGroupExampleInput">Phone No</label>
              <input type="text" name="PhoneNo" value="<?php echo $data['phoneNo'] ?>" id="formGroupExampleInput" placeholder="" class="form-control ><?php echo (!empty($data['phoneNo_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['phoneNo'] ?>">
              <span class="invalid-feedback"><?php echo $data['phoneNo_error'] ?></span>
            </div>

          </div>

          <div class="form-row">

            <div class="form-group  col">
              <label for="formGroupExampleInput">Street No</label>
              <input type="text" name="StreetNo" value="<?php echo $data['streetNo'] ?>" id="formGroupExampleInput" placeholder="" class="form-control ><?php echo (!empty($data['streetNo_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['streetNo'] ?>">
              <span class="invalid-feedback"><?php echo $data['streetNo_error'] ?></span>
            </div>

            <div class="form-group  col">
              <label for="formGroupExampleInput">Apartament No</label>
              <input type="text" name="ApartamentNo" value="<?php echo $data['apartamentNo'] ?>" id="formGroupExampleInput" placeholder="" class="form-control ><?php echo (!empty($data['apartamentNo_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['apartamentNo'] ?>">
              <span class="invalid-feedback"><?php echo $data['apartamentNo_error'] ?></span>

            </div>
          </div>

          <div class="form-row">
            <div class="form-group required col">
              <label for="formGroupExampleInput" class="control-label">Role:</label>
              <select class="form-control" id="formGroupExampleInput" name='Role'>
                <option value='ht_manager'>Hotel Manager</option>
                <option value='rs_manager'>Restaurant Manager</option>
                <option value='waiter'>Waiter</option>
                <option value='receptionist'>Receptionist</option>
                <option value='other'>Other</option>
              </select>
            </div>

            <div class="form-group  col">
              <label for="formGroupExampleInput">Description</label>
              <input type="text" name="Descrition" value="<?php echo $data['description'] ?>" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group required  col">
              <label for="txtEmail" class="control-label">Email</label>

              <input type="email" name="Email" value="<?php echo $data['email'] ?>" id="txtEmail" aria-describedby="emailHelp" placeholder="" class="form-control 
                        <?php echo (!empty($data['email_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['email'] ?>">
              <span class="invalid-feedback"><?php echo $data['email_error'] ?></span>
            </div>

            <div class="form-group required col">
              <label for="txtPass" class="control-label">Password</label>
              <input type="password" name="Password" value="<?php echo $data['password'] ?>" id="txtPass" placeholder="" class="form-control 
                        <?php echo (!empty($data['password_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['password'] ?>">
              <span class="invalid-feedback"><?php echo $data['password_error'] ?></span>
            </div>
          </div>

          <div class="form-group required">
            <label for="txtConfPass" class="control-label">Confirm Password</label>
            <input type="password" name="confirm_Password" value="<?php echo $data['confirm_password'] ?>" id="txtConfPass" placeholder="" class="form-control 
                        <?php echo (!empty($data['confirm_password_error'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['confirm_password'] ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_error'] ?></span>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>


      </div>

    </div>


  </div>


</body>

</html>


<?php require APPROOT . '/views/inc/footer.php' ?>