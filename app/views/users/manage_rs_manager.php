<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/navbar.php'; ?>


<article class="">
    <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3">
        <div class="col">
            <div class="card rounded border border-primary" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Show Inventory</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/users/show_inventory" class="btn btn-primary">Show</a><br>
                </div>
            </div>
        </div>
    <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3">
            <div class="col">
                <div class="card rounded border border-primary" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Transactions on Inventory</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/users/reservations" class="btn btn-primary">Show</a><br>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3">
            <div class="col">
                <div class="card rounded border border-primary" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Manage Inventory</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="<?php echo URLROOT; ?>/users/manage_inventory" class="btn btn-primary">Manage</a><br>
                </div>
            </div>
        </div>
    </div>
</article>
<?php require APPROOT . '/views/inc/footer.php'; ?>