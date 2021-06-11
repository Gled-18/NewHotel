<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<article class="row row-cols-3">
    <div class="col col-4">
        <h1>Financat e Hotelit</h1>
        <div id="chartDiv"></div>
    </div>

    <div class="col col-4">
        <h1>Financat e Restorantit</h1>
        <div id="chartDiv2"></div>
    </div>

    <form class="h-100 align-self-start">
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
            </div>
        </div>
    </form>

    <div class="col col-4">
        <h1>Financat e Plazhit(?)</h1>
        <div id="chartDiv3"></div>
    </div>

    <div class="col col-4 mx">
        <h1>Fitime/Humbje</h1>
        <div id="chartDiv4"></div>
    </div>

</article>



<?php require APPROOT . '/views/inc/footer.php'; ?>