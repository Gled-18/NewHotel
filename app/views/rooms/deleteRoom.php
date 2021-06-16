<?php #require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>
<?php if($_SESSION['user_role'] != 'ht_manager'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>
    <div>
        <h1>DELETE Room </h1>
        <p>Are you sure you want to delete <b><?php echo $data['RoomNo']?></b> Room ?</p>
        <form action="<?php echo URLROOT; ?>/rooms/deleteRoom/<?php echo $data['RoomID']?>" method="post">
            <div>
                <input type="submit" name="commit" value="Delete <?php echo $data['RoomNo']?>" />
            </div>
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php'?>