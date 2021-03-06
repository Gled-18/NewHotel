<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div>

<?php if($_SESSION['user_role'] != 'receptionist'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>

    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Client ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>
                    <a href="<?php echo URLROOT; ?>/users/addClient">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add Client" data-delay="0">
                            <i class="fas fa-user-plus"></i>

                        </button>
                    </a>
                </th>

            </tr>
        </thead>
        <?php foreach ($data['Client'] as $Client) : ?>
            <tr>
                <td><?php echo $Client->clientID; ?></td>
                <td><?php echo $Client->clientName; ?></td>
                <td><?php echo $Client->Surname; ?></td>
                <td><a href="<?php echo URLROOT; ?>/users/editClient/<?php echo $Client->clientID; ?>" class="btn btn-warning">Edit</a></td>
                <td><a href="<?php echo URLROOT; ?>/users/deleteClient/<?php echo $Client->clientID; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>