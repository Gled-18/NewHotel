<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
    <div>

        <table class="table table-striped ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Room</th>
                <th>From</th>
                <th>To</th>
                <th>Client</th>
                <th>Employee</th>
                <th>Days</th>
                <th>Price</th>

                <th>
                    <a href="<?php echo URLROOT; ?>/users/addReservation">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add Reservations" data-delay="0">
                            <?php echo file_get_contents("../app/assets/user-plus-solid.svg"); ?>
                        </button>
                    </a>
                </th>

            </tr>
            </thead>
            <?php foreach ($data['Reservation'] as $Reservation) : ?>
                <tr>
                    <td><?php echo $Reservation->requestID; ?></td>
                    <td><?php echo $Reservation->RoomNo; ?></td>
                    <td><?php echo $Reservation->stayStartDate; ?></td>
                    <td><?php echo $Reservation->stayEndDate; ?></td>
                    <td><?php echo $Reservation->Client; ?></td>
                    <td><?php echo $Reservation->Employee;?></td>
                    <td><?php echo $Reservation->DateDiff;?></td>
                    <td><?php echo $Reservation->DateDiff*$Reservation->price . " ALL";?></td>
                    <td><a href="<?php echo URLROOT; ?>/users/editReservation/<?php echo $Reservation->requestID; ?>" class="btn btn-warning">Edit</a></td>
                    <td><a href="<?php echo URLROOT; ?>/users/deleteReservation/<?php echo $Reservation->requestID; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
