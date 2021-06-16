<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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

                    <td>
                        <a href="<?php echo URLROOT; ?>/roomsType/deleteRoomType/<?php echo $roomType->typeID; ?>" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="far fa-trash-alt"></i><!-- Delete --></a>


                    </td>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="addEmployee.php" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                                anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <!-- <button  class="btn btn-primary">Submit</button> -->
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary " onclick="sendDelReq(<?php echo $roomType->typeID; ?> )">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </tr>
            <?php endforeach; ?>

        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
        function sendDelReq(param) {
            console.log(param);
            $.post("http://localhost/NewHotel" + "/roomsType/deleteRoomType/" + param, {
                //no data needed
            }, function(data, status) {

                if (status === 'success') {
                    alert("successfully deleted");
                    
                    $('#modal').modal('hide');
                }
                else {
                    alert("An unexpected error occurred");
                }
            });



        }
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>



</html>

<?php ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>