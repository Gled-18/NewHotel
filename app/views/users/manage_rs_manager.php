<?php //require APPROOT . '/views/inc/header.php'; 
?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<?php if($_SESSION['user_role'] != 'rs_manager'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">


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
    <main class="contaier mx-5">
        <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3">
            <div class="col">
                <div class="card rounded " style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Show Inventory</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="<?php echo URLROOT; ?>/users/show_inventory" class="btn btn-primary">Show</a><br>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded " style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Transactions on Inventory</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="<?php echo URLROOT; ?>/users/transactions" class="btn btn-primary">Show</a><br>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card rounded " style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Manage Inventory</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="<?php echo URLROOT; ?>/users/manage_inventory" class="btn btn-primary">Manage</a><br>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>