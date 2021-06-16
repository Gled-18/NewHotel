<?php #require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>
    <div>
        <h1>DELETE Room Type</h1>
        <p>Are you sure you want to delete <b><?php echo $data['typeName']?></b> Room Type?</p>
        <form action="<?php echo URLROOT; ?>/roomsType/deleteRoomType/<?php echo $data['typeID']?>" method="post">
            <div>
                <input type="submit" name="commit" value="Delete <?php echo $data['typeName']?>" />
            </div>
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php'?>