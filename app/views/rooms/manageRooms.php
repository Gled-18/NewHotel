<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/navbar.php'; ?>
    <div>
        <table>
            <tr>
                <th>RoomNo</th>
                <th>Floor</th>
                <th>Occupied</th>
            </tr>
            <?php foreach($data['Room'] as $Room) : ?>
                <tr>
                    <td><?php echo $Room->RoomNo;?></td>
                    <td><?php echo $Room->Floor;?></td>
                    <td><?php echo $Room->Status;?></td>

                    <td><a href="<?php echo URLROOT; ?>/rooms/editRoom/<?php echo $Room->typeID; ?>">Edit</a></td>
                    <td><a href="<?php echo URLROOT; ?>/roomsType/deleteRoom/<?php echo $Room->typeID; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>

        </table>
        <a href="<?php echo URLROOT; ?>/roomsType/addRoom">Add Room</a>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>