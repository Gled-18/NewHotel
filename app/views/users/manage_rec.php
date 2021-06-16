<?php #require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<?php if($_SESSION['user_role'] != 'receptionist'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>
<article class="">
    <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3">
        <div class="col">
            <div class="card rounded border border-primary" style="width: 18rem;">
                <!-- <img class="card-img-top" src="C:/xampp/htdocs/NewHotel/app/assets/plus-circle-solid.svg" alt="Card image cap"> -->
                <img class="card-img-top" src="<?php echo APPROOT. '/assets/plus-circle-solid.svg'; ?>" alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title">Manage Clients</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/users/clients_rec" class="btn btn-primary">Register</a><br>
                </div>
            </div>
        </div>
        <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3">
            <div class="col">
                <div class="card rounded border border-primary" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Reservation</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="<?php echo URLROOT; ?>/users/reservations" class="btn btn-primary">Reserve</a><br>
                    </div>
                </div>
            </div>
        </div>
</article>
<?php require APPROOT . '/views/inc/footer.php'; ?>