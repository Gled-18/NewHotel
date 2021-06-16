<?php #require APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/inc/navbar.php' ?>
<?php if($_SESSION['user_role'] != 'receptionist'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>
    <div>
        <h1>DELETE RESERVATION</h1>
        <p>Are you sure you want to delete reservation for  <?php echo $data['clientName']." ".$data['Surname']." from " .$data['Reservation']->stayStartDate. " to ".$data['Reservation']->stayEndDate ;?>?</p>
        <form action="<?php echo URLROOT; ?>/users/deleteReservation/<?php echo $data['requestID'];?>" method="post">
            <div>
                <input type="submit" name="commit" value="Delete" />
            </div>
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php' ?>