<?php require APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/inc/navbar.php' ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Welcome to the most extraordinary hotel in Boston">
        <meta name="keywords" content="hotel,boston hotel, new england hotel">
        <title>Greccia HMS | Add Order</title>
        <link rel="icon" href="ghotel1.ico">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <!--       <link rel="stylesheet" href="css/users/stls.css"-->
        <style>
            body {
                background: #E7E7E7;
            }

            /*Reset*/
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;

            }

            /*Utility Classes*/
            .container {
                margin: auto;
                max-width: 1100px;
                overflow: auto;
                padding: 0 20px;
            }

            .column {
                margin-left: 11.9%;
                float: left;
                width: 1.33%;
                padding: 10px;
            }

            .row::after {
                content: "";
                clear: both;
                display: table;
            }

            .text-primary {
                color: #8A95FF;
            }

            .lead {
                font-size: 20px;
            }

            .btn {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #333;
                padding: 13px 20px;
                border: none;
                cursor: pointer;
                border-radius: 10px;
                transition: 0.7s;
            }

            .btn:hover {
                background: #8A95FF;
                color: #333;
            }

            .btn-light {
                background: #f4f4f4;
                color: #333;
            }

            .bg-dark {
                background: #333;
                color: #fff;
            }

            .bg-grey {
                background: #7C7C7C;
                color: #fff;
            }

            .bg-lg {
                background: #E7E7E7;
                color: #333;
            }

            .bg-light {
                background: #f4f4f4;
                color: #333333;
            }

            .bg-primary {
                background: #8A95FF;
                color: #333;
            }

            .bg-grey2 {
                background: #D7D7D7;
                color: #565656;
            }

            .clr {
                clear: both;
            }

            .l-heading {
                font-size: 40px;
                line-height: 1.2;
            }

            .l-heading2 {
                font-size: 30px;
                line-height: 1.2;
            }

            .l-heading3 {
                font-size: 50px;
                line-height: 1.2;
            }

            .l-heading4 {
                font-size: 20px;
                line-height: 1.2;
            }

            /*Padding*/
            .py-1 {
                padding: 10px 0;
            }

            .py-2 {
                padding: 20px 0;
            }

            .py-3 {
                padding: 30px 0;
            }

            .py-4 {
                margin-left: 11.9;
                padding: 40px 0px;
            }

            /*Image Style*/
            .w3-left, .w3-right, .w3-badge {
                cursor: pointer
            }

            .w3-badge {
                height: 13px;
                width: 13px;
                padding: 0
            }

            /*-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"*/
            body {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 14px;
                line-height: 1.42857143;
                color: #333;
                background-color: #fff;
            }

            html, body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                line-height: 1.7em;
                font-size: 14px;
            }

            /*Main Styling*/
            a {
                color: #333;
                text-decoration: none;
            }

            h1, h2, h3 {
                padding-bottom: 20px;
            }

            p {
                margin: 10px 0;
            }


            /*Navbar*/
            #navbar {
                background: #333;
                color: #fff;
                overflow: auto;

            }

            #navbar a {
                color: #fff;
            }

            #navbar .logo {
                float: left;
                padding-top: 25px;
            }

            #navbar ul {
                list-style: none;
                float: right;
            }

            #navbar ul li {
                float: left;
            }

            #navbar ul li a {
                display: block;
                padding: 43.5px;
                text-align: center;
            }

            #navbar ul li a:hover,
            #navbar ul li a.current {

                color: #8A95FF;
            }

            /*Waiter*/

            #waiter-form .form-group {
                margin-bottom: 20px;
            }

            #waiter-form label {
                display: block;
                margin-bottom: 5px;
            }

            /*Table button*/

            .dropbtn {

                background-color: #333;
                color: #EAEAEA;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
                border-radius: 10px;
                transition: 0.9s;
            }

            .dropbtn:hover, .dropbtn:focus {
                background-color: #202020;

            }

            #myInput {
                box-sizing: border-box;
                background-image: url('../img/searchicon.png');
                background-position: 14px 12px;
                background-repeat: no-repeat;
                font-size: 16px;
                padding: 14px 20px 12px 45px;
                border: none;
                border-bottom: 1px solid #ddd;
            }

            #myInput:focus {
                outline: 3px solid #ddd;
            }

            .dropdown {
                left: 320px;
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f6f6f6;
                min-width: 230px;
                overflow: auto;
                border: 1px solid #ddd;
                z-index: 1;
                overflow-x: hidden;
                max-height: 200px;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown a:hover {
                background-color: #ddd;
            }

            .show {
                display: block;
            }

            /* The container */
            .container1 {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 14px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            /* Hide the browser's default checkbox */
            .container1 input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0;
            }

            /* Create a custom checkbox */
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #E4E4E4;
                border: 0.5px solid #D0D0D0;
                border-radius: 4px;
            }

            /* On mouse-over, add a grey background color */
            .container1:hover input ~ .checkmark {
                background-color: #ccc;
            }

            /* When the checkbox is checked, add a blue background */
            .container1 input:checked ~ .checkmark {
                background-color: #2196F3;
            }

            /* Create the checkmark/indicator (hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the checkmark when checked */
            .container1 input:checked ~ .checkmark:after {
                display: block;
            }

            /* Style the checkmark/indicator */
            .container1 .checkmark:after {
                left: 9px;
                top: 5px;
                width: 5px;
                height: 10px;
                border: solid white;
                border-width: 0 3px 3px 0;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
            }

            /*Plus Minus Button*/

            .number span {
                cursor: pointer;
            }

            .number {
                margin: -3px;
            }

            .minus, .plus {
                width: 28px;
                height: 26px;
                background: #E4E4E4;
                border-radius: 4px;

                border: 0.5px solid #D0D0D0;
                display: inline-block;
                vertical-align: middle;
                text-align: center;
            }

            .minus:hover, .plus:hover {
                background: #ccc;
            }

            .number input {
                height: 26px;
                width: 70px;
                text-align: center;
                font-size: 14px;
                border: 1px solid #D0D0D0;
                border-radius: 4px;
                display: inline-block;
                vertical-align: middle;
            }

            .selected {
                background-color: #ABABAB;
            }

        </style>
    </head>
    <body>
    <section id="waiter-form" class="bg-lg py-3">
        <div class="container">
            <h1 class="l-heading3">Add Order</h1>
        </div>
    </section>

    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Tables<i class="fa fa-caret-down"></i></button>
        <div id="myDropdown" class="dropdown-content">
            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
            <a href="">Table 1</a>
            <a href="">Table 2</a>
            <a href="">Table 3</a>
            <a href="">Table 4</a>
            <a href="">Table 5</a>
            <a href="">Table 6</a>
            <a href="">Table 7</a>
            <a href="">Table 8</a>
            <a href="">Table 9</a>
            <a href="">Table 10</a>
        </div>
    </div>

    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-10 mx-auto">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="table-responsive">
                            <form action="#" method="post">
                            <table id="example" style="width:100%" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Select</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Stock</th>

                                </tr>
                                </thead>

                                <tbody>

                                    <?php foreach ($data['items'] as $items) : ?>
                                        <tr class="js-row">
                                            <td><label class="container1">
                                                    <input id="chkb" type="checkbox" name="id[]"
                                                           value="<?php echo $items->productID; ?>">
                                                    <span class="checkmark"></span>
                                                </label></td>
                                            <td><?php echo $items->productName; ?></td>
                                            <td>
                                                <div name="quantity[]" class="number">
                                                    <span class="minus">-</span>
                                                    <input type="text" value="1""/>
                                                    <span class="plus">+</span>
                                                </div>
                                            </td>
                                            <td><?php echo $items->sellingPrice; ?></td>
                                            <td id="quantity"><?php echo $items->productQuantity; ?></td>

                                        </tr>
                                    <?php endforeach; ?>

                                    </tbody>

                            </table>
                            <input class="dropbtn" value="Submit" name="submit" type="submit">
                            </form>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {

        if (!empty($_POST['id'])) {

            foreach ($_POST['id'] as $value) {
                echo "value : " . $value . '<br/>';

            }

        }

    }
    ?>

    <script>
        $(function () {
            $(document).ready(function () {
                $('#example').DataTable();
            });
        });

        let tableRows = document.querySelectorAll('.js-row');

        for(let i=0; i<tableRows.length; i++){
            tableRows[i].onclick = function() {
                for(let j=0; j<tableRows.length; j++){
                    //if(i == j) continue;
                    if(tableRows[j].classList.contains('selected')) tableRows[j].classList.remove('selected');
                }
                if(!tableRows[i].classList.contains('selected')) tableRows[i].classList.add('selected');
            }
        }
    </script>

    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>

    <script>
        $(document).ready(function () {

                $('.minus').click(function () {
                    var $nrinput = $(this).parent().find('input');
                    var count = parseInt($nrinput.val());
                    count = count < 1 ? 1 : count;
                    $nrinput.val(count);

                    $nrinput.change();

                    return false;
                });
                $('.plus').click(function () {
                    var $nrinput = $(this).parent().find('input');
                    var count =parseInt($nrinput.val());
                    $nrinput.change();

                    return false;
                });
        });
    </script>

    </body>
    </html>
<?php require APPROOT . '/views/inc/footer.php'; ?>