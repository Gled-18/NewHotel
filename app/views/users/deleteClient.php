<?php require APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/inc/navbar.php' ?>
    <div>
        <h1>DELETE User</h1>
        <p>Are you sure you want to delete client <b><?php echo $data['clientName']." ".$data['Surname']?></b>?</p>
        <form action="<?php echo URLROOT; ?>/users/deleteClient/<?php echo $data['clientID'];?>" method="post">
            <div>
                <input type="submit" name="commit" value="Delete <?php echo $data['clientName']?>" />
            </div>
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php' ?>