<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <div>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <th>Type</th>
                <th>ID</th>
                <th>Price</th>
                <th>
                    <a href="<?php echo URLROOT; ?>/roomsType/addRoomType">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add Room" data-delay="0">
                            <i class="fas fa-user-plus"></i>
                        </button>
                    </a>

                </th>
                <th></th>
            </thead>
            <?php foreach ($data['roomType'] as $roomType) : ?>
                <tr>
                    <td><?php echo $roomType->typeName; ?></td>
                    <td><?php echo $roomType->typeID; ?></td>
                    <td><?php echo $roomType->price; ?></td>

                    <td><a href="<?php echo URLROOT; ?>/roomsType/editRoomType/<?php echo $roomType->typeID; ?>" class="btn btn-warning"><i class="far fa-edit"></i><!-- Edit --></a></td>
                    <td><a href="<?php echo URLROOT; ?>/roomsType/deleteRoomType/<?php echo $roomType->typeID; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i><!-- Delete --></a></td>

                </tr>
            <?php endforeach; ?>

        </table>

    </div>


</body>



</html>

<?php ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>