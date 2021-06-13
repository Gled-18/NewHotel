<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    function add_row() {
      $rowno = $("#employee_table tr").length;
      $rowno = $rowno + 1;
      $("#employee_table tr:last").after("<tr id='row" + $rowno + "'><td><input type='text' name='prodName[]' placeholder='Product Name'></td><td><input type='text' name='description[]' placeholder='Description'></td><td><input type='text' name='quantity[]' placeholder='Quantity'></td><td><input type='text' name='purPrice[]' placeholder='Purchase Price'></td><td><input type='text' name='sellPrice[]' placeholder='Selling Price'></td><td><input type='button' value='DELETE' onclick=delete_row('row" + $rowno + "')></td></tr>");
    }

    function delete_row(rowno) {
      $('#' + rowno).remove();
    }
  </script>
  <title><?php echo SITENAME; ?></title>
</head>

<body>
  <!-- <?php if (isset($_SESSION['userID'])) : ?>
   <?php require APPROOT . '/views/inc/navbar.php'; ?>
 <?php endif; ?> -->
  <!--<body>-->
  <!---->
  <div class="container" style="margin:0; width:100%;"></div>