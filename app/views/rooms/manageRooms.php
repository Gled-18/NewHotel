<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<!-- todo te merre lista e dhomave nga db qe ne page load -->
<?php if($_SESSION['user_role'] != 'ht_manager'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>
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
        <table id="tableData " class="table table-striped table-hover">
            <thead>
                <!-- class="thead-dark" -->
                <th>RoomNo &emsp;</th>
                <th>Floor &emsp;</th>
                <th>Status &emsp;</th>
                <th>Type &emsp;</th>
                <th>Price &emsp;</th>
                <th>
                    <a href="<?php echo URLROOT; ?>/rooms/addRoom">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Add Room" data-delay="0">
                            <i class="fas fa-user-plus"></i>
                        </button>
                    </a>
                </th>
                <th></th>
                

            </thead>
            <?php foreach ($data['Room'] as $Room) : ?>
                <tr>
                    <td><?php echo $Room->RoomNo; ?></td>
                    <td><?php echo $Room->Floor; ?></td>
                    <td><?php echo $Room->Status; ?></td>
                    <td><?php echo $Room->typeName; ?></td>
                    <td><?php echo $Room->price; ?></td>

                    <td><a href="<?php echo URLROOT; ?>/rooms/editRoom/<?php echo $Room->RoomID; ?>" class="btn btn-warning"><i class="far fa-edit"></i><!-- Edit --></a></td>
                    <td><a href="<?php echo URLROOT; ?>/rooms/deleteRoom/<?php echo $Room->RoomID; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i><!-- Delete --></a></td>


                </tr>
            <?php endforeach; ?>

        </table>



        
    </div>

    <!-- kjo sben pune  -->
    <!-- script qe mbush tabelen me dhoma nga databaza pasi ngarkohet htmlja -->

    <!-- <script>
        // kur html ngarkohet
        $(document).ready(function() {
            // shko ne allRooms.php me sill liste me krejta dhomat nga databaza.
            $.post("allRooms.php", {
                /**ska data */
            }, function(data, status) {
                console.log("Response: " + data);

                // responsi kthen liste me dhoma 
                // loop tgjithave e shfaqen me layoutin qe duhet

                let responseData = JSON.parse(data);

                // per cdo resultat
                $.each(responseData, function(i, item) {

                    // shtoi tek elementi me id tabledata
                    $("#tableData").append(

                        "<tr>" + "<td>" + item.RoomNo + "</td>" +
                        "<td>" + item.Floor + "</td>" +
                        "<td>" + item.Status + "</td>" +
                        "<td>" + item.typeName + "</td>" +
                        "<td>" + item.price + "</td>" +

                        // "<td><a href=\"" + <?php echo URLROOT; ?> / rooms / editRoom / +item.RoomID; ? > "\">Edit</a></td>" +
                        // "<td><a href=\"" + <?php echo URLROOT; ?> / rooms / deleteRoom / +item.RoomID; ? > "\">Delete</a></td>" +

                        "</tr>"

                    )

                });

            });


        });
    </script> -->
</body>

</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>