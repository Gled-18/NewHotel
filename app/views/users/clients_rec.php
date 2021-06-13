<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
    <div>

        <table class="table table-striped ">
            <thead>
            <tr>
                <th>Client ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>
                    <a href="<?php echo URLROOT; ?>/users/addClient">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add Client" data-delay="0">
                            <?php echo file_get_contents("../app/assets/user-plus-solid.svg"); ?>
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