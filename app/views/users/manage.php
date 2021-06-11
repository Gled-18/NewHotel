<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<article class="">
    <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3">
        <div class="col">
            <div class="card rounded border border-primary" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Manage Employees</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/users/manageUsers" class="btn btn-primary">Manage Users</a><br>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded border border-secondary" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Room</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/rooms/manageRooms" class="btn btn-primary">Manage Rooms</a><br>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card rounded border border-danger" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Room Type</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/roomsType/roomType" class="btn btn-primary">Manage Room Types</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded border border-dark" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Hotel Finances </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/finances/index" class="btn btn-primary">Manage Finances</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded border border-dark" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Manage Supplies </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/supplies/index" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card rounded border border-dark" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Show Inventory </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/supplies/index" class="btn btn-primary">Manage</a>
                </div>
            </div>
        </div>
        <!-- <div class="col">
            <div class="card rounded border border-primary" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Hotel Inventory </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> -->
        <!-- <div class="col">
            <div class="card border border-success" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Public Relation </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> -->
    </div>

</article>


<?php require APPROOT . '/views/inc/footer.php'; ?>