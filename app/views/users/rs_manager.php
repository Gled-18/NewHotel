<?php# require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/navbar.php'; ?>
<?php if($_SESSION['user_role'] != 'rs_manager'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>
<?php echo "Welcome menaxher i resorantit"; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
