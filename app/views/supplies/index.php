<!-- <?php require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>
<div id="wrapper">

<div id="form_div">
 <form method="post" action="<?php echo URLROOT.'/supplies/index'?>">
  <table id="employee_table" align=center>
   <tr id="row1">
    <td><input type="text" name="prodName[]" placeholder="Product Name"></td>
    <td><input type="text" name="description[]" placeholder="Description"></td>
    <td><input type="text" name="quantity[]" placeholder="Quantity"></td>
    <td><input type="text" name="purPrice[]" placeholder="Purchase Price"></td>
    <td><input type="text" name="sellPrice[]" placeholder="Selling Price"></td>   
   </tr>
  </table>
  <input type="button" onclick="add_row();" value="ADD ROW">
  <input type="submit" name="submit_row" value="SUBMIT">
 </form>
</div>

</div>
<?php require APPROOT . '/views/inc/footer.php'?> -->

