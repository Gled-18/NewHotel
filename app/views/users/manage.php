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

    <!-- CSS styling  IMPORTI NUK PUNON -->
    <!-- manageUsers -->
    <link rel="stylesheet" href="/public/css/users/manage.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <style>
        body {
            margin-bottom: 10px;
            background: #e7e7e7;
        }

        .col h5 {

            text-align: center;
            font-style: bold;
            font-size: xx-large;
            height: 70px;
        }

        .card {
            width: 18rem;
            height: 15rem;
            margin-bottom: 30px;
            /* border-radius: 10px !important; */
            
          
        }

        .card-title {
            font-family: 'Abril Fatface', cursive;
            font-size: 30px !important;
        }


        .card-body:hover {
            background-color: #e7e7e7;
           
        }
    </style>

</head>

<body>
    <main class="container">
        <div class="row row-cols-3 row-cols-sm-2">
            <div class="col">
                <div class="card rounded border-dark " >
                    <div class="card-body">
                        <div style="display: flex;">
                            <h5 class="card-title text-left">Manage Employees </h5><i class="fas fa-tasks fa-2x" style="margin-left: auto"></i>
                        </div>
                        <p class="card-text text-left">Add; Remove and Edit Employee Data.</p>
                        <a href="<?php echo URLROOT; ?>/users/manageUsers" class="btn btn-primary">Manage Users</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card rounded border border-dark" >
                    <div class="card-body">
                        <div style="display: flex;">
                            <h5 class="card-title text-left">Room</h5><i class="fas fa-door-open fa-2x" style="margin-left: auto"></i>
                        </div>
                        <p class="card-text text-left">Expand your hotel by adding new Rooms</p>
                        <a href="<?php echo URLROOT; ?>/rooms/manageRooms" class="btn btn-primary">Manage Rooms</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded border  border-dark" >
                    <div class="card-body">
                        <div style="display: flex;">
                            <h5 class="card-title text-left"> Room Type</h5><i class="fas fa-key fa-2x" style="margin-left: auto"></i>
                        </div>
                        <p class="card-text text-left"> Room Type management </p>
                        <a href="<?php echo URLROOT; ?>/roomsType/roomType" class="btn btn-primary">Manage Room Types</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded border border-dark">

                    <div class="card-body">
                        <div style="display: flex;">
                            <h5 class="card-title text-left">Hotel Finances </h5><i class="fas fa-money-bill-wave fa-2x" style="margin-left: auto"></i>
                        </div>
                        <p class="card-text text-left">View profits on a weekly/monthly basis for the hotel restaurant </p>
                        <a href="<?php echo URLROOT; ?>/finances/index" class="btn btn-primary">Manage Finances</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded border border-dark" >
                    <div class="card-body">
                        <div style="display: flex;">
                            <h5 class="card-title text-left"> Manage Supplies </h5><i class="fas fa-truck-moving fa-2x" style="margin-left: auto"></i>
                        </div>
                        <p class="card-text text-left">Supply and Demand </p>
                        <a href="<?php echo URLROOT; ?>/supplies/index" class="btn btn-primary pull-down">Manage</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded border border-dark" >
                    <div class="card-body">

                        <div style="display: flex;">
                            <h5 class="card-title text-left"> Show Inventory </h5><i class="fas fa-boxes fa-2x" style="margin-left: auto"></i>
                        </div>
                        <p class="card-text text-left">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                        <a href="<?php echo URLROOT; ?>/supplies/index" class="btn btn-primary ">Manage</a>
                    </div>
                </div>
            </div>

        </div>

    </main>

</body>

</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>