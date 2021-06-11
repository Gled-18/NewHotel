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
            <select class="form-control" id="exampleFormControlSelect1" name='Status'>
                <?php $status = array('Available','Occupied','Reserved','Out of Service');?>
                <?php foreach($status as $Status) : ?>
                    <option value='<?php echo $Status;?>'<?php if ($Status == $data['Status']) echo ' selected="selected"'; ?>><?php echo $Status;?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect2">Room Type</label>
            <select class="form-control" id="exampleFormControlSelect2" name='typeID'>
                <?php foreach($data['type'] as $Room) : ?>
                    <option value='<?php echo $Room->typeID;?>'<?php if ($Room->typeID == $data['typeID']) echo ' selected="selected"'; ?>><?php echo $Room->typeName;?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Price</label>
            <input type="text" name="Price" value="<?php foreach ($data['type'] as $Room) :?><?php if ($Room->typeID == $data['typeID']) echo $Room->price?><?php endforeach; ?>" class="form-control" id="formGroupExampleInput" placeholder="" readonly>
        </div><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php require APPROOT . '/views/inc/footer.php'?>