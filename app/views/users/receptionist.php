<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<?php if($_SESSION['user_role'] != 'receptionist'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>
<!-- <?php //echo "Recepsionisti" . $_SESSION['user_id']; 
        ?> -->

<br><br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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


        .card-body:hover:not(.excludeHover) {
            background-color: #e7e7e7;

        }
    </style>

</head>

<body>

    <main class="container">

        <div class="row row-cols-3 row-cols-sm-2 ">

            <div class="col">
                <div class="card rounded border border-primary" style="width: 18rem;">
                    <div class="card-body">
                        <div style="display: flex;">
                            <h5 class="card-title text-left">Reservation </h5><i class="fas fa-money-bill-wave fa-2x" style="margin-left: auto"></i>
                        </div>
                        <p class="card-text text-left">View profits on a weekly/monthly basis for the hotel restaurant </p>
                        <a href="<?php echo URLROOT; ?>/users/reservations" class="btn btn-primary">Reserve</a><br>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded border border-primary" style="width: 18rem;">
                    <div class="card-body">
                        <div style="display: flex;">
                            <h5 class="card-title text-left">Register Client </h5><i class="fas fa-money-bill-wave fa-2x" style="margin-left: auto"></i>
                        </div>
                        <p class="card-text text-left">View profits on a weekly/monthly basis for the hotel restaurant </p>
                        <a href="<?php echo URLROOT; ?>/users/clients_rec" class="btn btn-primary">Register</a><br>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>

</html>


<?php require APPROOT . '/views/inc/footer.php'; ?>