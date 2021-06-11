<?php require APPROOT . '/views/inc/header.php'?>
<?php require APPROOT . '/views/inc/navbar.php'?>
    <form action="<?php echo URLROOT; ?>/rooms/editRoom/<?php echo $data['RoomID'];?>" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">Room Number</label>
            <input type="text" name="RoomNo" value="<?php echo $data['RoomNo']?>" class="form-control" id="formGroupExampleInput" placeholder="Enter Room Number">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Floor</label>
            <input type="text" name="Floor" value="<?php echo $data['Floor']?>" class="form-control" id="formGroupExampleInput" placeholder="Enter Floor">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Room Status</label>
            <select class="form-control" id="exampleFormControlSelect1" name='Status' value="<?php echo $data['Status'];?>">
                <option value='Available'>Available</option>
                <option value='Occupied'>Occupied</option>
                <option value='Reserved'>Reserved</option>
                <option value='Out of Service'>Out of Service</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Room Type</label>
            <select class="form-control" id="exampleFormControlSelect1" name='typeID' value="<?php echo $data['type']->typeID;?>>
                <?php foreach($data['type'] as $Room) : ?>
                    <option value='<?php echo $Room->typeID;?>'><?php echo $Room->typeName;?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Price</label>
            <input type="text" name="Price" value="<?php  ;?>" class="form-control" id="formGroupExampleInput" placeholder="" readonly>
        </div><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php require APPROOT . '/views/inc/footer.php'?>