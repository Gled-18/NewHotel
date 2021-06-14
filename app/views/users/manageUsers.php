<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div>

  <table class="table table-striped ">
    <thead>
      <tr>
        <th>User ID</th>
        <th>Username</th>
        <th>Surname</th>
        <th>Role</th>
        <th>
          <a href="<?php echo URLROOT; ?>/users/addUser">
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
        <td><a href="<?php echo URLROOT; ?>/users/editUser/<?php echo $user->employeeID; ?>" class="btn btn-warning">Edit</a></td>
        <td><a href="<?php echo URLROOT; ?>/users/deleteUser/<?php echo $user->employeeID; ?>" class="btn btn-danger">Delete</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>