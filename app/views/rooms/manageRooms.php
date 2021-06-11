<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/navbar.php'; ?>
    <div>
        <table>
            <tr>
                <th>RoomNo &emsp;</th>
                <th>Floor &emsp;</th>
                <th>Status &emsp;</th>
                <th>Type &emsp;</th>
                <th>Price &emsp;</th>
            </tr>
            <?php foreach($data['Room'] as $Room) : ?>
                <tr>
                    <td><?php echo $Room->RoomNo;?></td>
                    <td><?php echo $Room->Floor;?></td>
                    <td><?php echo $Room->Status;?></td>
                    <td><?php echo $Room->typeName;?></td>
                    <td><?php echo $Room->price;?></td>

                    <td><a href="<?php echo URLROOT; ?>/rooms/editRoom/<?php echo $Room->RoomID; ?>">Edit</a></td>
                    <td><a href="<?php echo URLROOT; ?>/rooms/deleteRoom/<?php echo $Room->RoomID; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>

        </table>
        <a href="<?php echo URLROOT; ?>/rooms/addRoom">Add Room</a>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>