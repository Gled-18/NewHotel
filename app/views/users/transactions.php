<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>Transaction ID</th>
            <th>Product Name</th>
            <th>Employee ID</th>
            <th>Date</th>
            <th>Quantity</th>
            <th>Cost</th>
            
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data['transactions'] as $transacion) : ?>
        <?php $var1 = $transacion->Quantity; ?>
        <?php $var2 = $transacion->purchasePrice; ?>
        <?php $var1 = $var1 + 0; ?>
        <?php $var2 = $var2 + 0; ?>
       <?php $var2 = $var2 + 0; ?>
      <tr>
        <td><?php echo $transacion->transactionID; ?></td>
        <td><?php echo $transacion->productName; ?></td>
        <td><?php echo $transacion->employeeID; ?></td>
        <td><?php echo $transacion->manageSuppliesDate; ?></td>
        <td><?php echo $transacion->Quantity; ?></td>
        <?php if($transacion->action == "add") : ?>
          <td><?php echo $var3 = $var1 * $var2; ?></td>
        <?php else : ?>
          <td><?php echo 0; ?></td>
        <?php endif; ?>
    <?php $var1 = 0; ?>
    <?php $var2 = 0; ?>
        <!-- <td><a href="<?php echo URLROOT; ?>/users/editUser/<?php //echo $user->employeeID; ?>" class="btn btn-warning">Edit</a></td> -->
        <!-- <td><a href="<?php echo URLROOT; ?>/users/deleteUser/<?php //echo $user->employeeID; ?>" class="btn btn-danger">Remove</a></td> -->
      </tr>
      <?php endforeach; ?>
            <!-- <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr> -->
        </tbody>
        </table>
        <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->


        <br>
        <br>
        <br>
        <?php require APPROOT . '/views/inc/footer.php'; ?>
