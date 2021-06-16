<?php //require APPROOT . '/views/inc/header.php'; ?>
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
                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top"
                            title="Add Reservations" data-delay="0">
                        <i class="fas fa-user-plus"></i>
                    </button>
                </a>
            </th>

        </tr>
        </thead>
        <form action="" method="post">
            <?php foreach ($data['Reservation'] as $Reservation) : ?>
                <tr>
                    <td><?php echo $Reservation->requestID; ?></td>
                    <td><?php echo $Reservation->RoomNo; ?></td>
                    <td><?php echo $Reservation->stayStartDate; ?></td>
                    <td><?php echo $Reservation->stayEndDate; ?></td>
                    <td><?php echo $Reservation->Client; ?></td>
                    <td><?php echo $Reservation->Employee; ?></td>
                    <td><?php echo $Reservation->DateDiff; ?></td>
                    <td><?php echo $Reservation->DateDiff * $Reservation->price . " ALL"; ?></td>
                    <td><a href="<?php echo URLROOT; ?>/users/reservations/<?php echo $Reservation->requestID; ?>"
                           class="btn btn-success" data-toggle="modal" data-target="#myModal" type="submit">Complete</a>
                    </td>
                    <td><a href="<?php echo URLROOT; ?>/users/editReservation/<?php echo $Reservation->requestID; ?>"
                           class="btn btn-warning">Edit</a></td>
                    <td><a href="<?php echo URLROOT; ?>/users/deleteReservation/<?php echo $Reservation->requestID; ?>"
                           class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </form>
    </table>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Service Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container-fluid">

                <form action="" method="POST">
                    <div class="container">
                        <div class="row ">
                            <label for="datepickerModal" class="col"><b>Do you want to set the reservation as complete?</b> </label>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Confirm</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                </form>

            </div>

        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
<?php
if (isset($_POST['submit'])) {

    if (!empty($_POST['id'])) {

        foreach ($_POST['id'] as $value) {
            echo "value : " . $value . '<br/>';

        }

    }

}

;?>