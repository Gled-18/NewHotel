<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UserManage</title>

  <style>
    table tr:hover {

      background-color: #e7e7e7;

    }
  </style>
</head>

<body>


  <div>

    <table class="table table-striped ">
      <thead>
        <tr>
          <th>User ID</th>
          <th>Username</th>
          <th>Surname</th>
          <th>Role</th>
          <th>
            <a href="<?php echo URLROOT; ?>/users/clients/addUser">
              <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add User" data-delay="0">
                <i class="fas fa-user-plus"></i>
              </button>
            </a>
          </th>

        </tr>
      </thead>
      <?php foreach ($data['users'] as $user) : ?>
        <tr>
          <td><?php echo $user->employeeID; ?></td>
          <td><?php echo $user->Name; ?></td>
          <td><?php echo $user->Surname; ?></td>
          <td><?php echo $user->Role; ?></td>
          <td><a href="<?php echo URLROOT; ?>/users/clients/editUser/<?php echo $user->employeeID; ?>" class="btn btn-warning">Edit</a></td>
          <td><a href="<?php echo URLROOT; ?>/users/clients/deleteUser/<?php echo $user->employeeID; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>


<?php require APPROOT . '/views/inc/footer.php'; ?>