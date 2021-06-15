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

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>



    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<body>

    <div>
        <table class="table table-striped table-hover table-bordered" id="dtBasicExample">
            <thead>
                <th>Type</th>
                <th>ID</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </thead>
            <?php foreach ($data['roomType'] as $roomType) : ?>
                <tr>
                    <td><?php echo $roomType->typeName; ?></td>
                    <td><?php echo $roomType->typeID; ?></td>
                    <td><?php echo $roomType->price; ?></td>
                    <td><a href="<?php echo URLROOT; ?>/roomsType/editRoomType/<?php echo $roomType->typeID; ?>">Edit</a></td>
                    <td><a href="<?php echo URLROOT; ?>/roomsType/deleteRoomType/<?php echo $roomType->typeID; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>

        </table>
        <a href="<?php echo URLROOT; ?>/roomsType/addRoomType">Add Room Type</a>
    </div>

    
</body>



</html>

<?php ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>