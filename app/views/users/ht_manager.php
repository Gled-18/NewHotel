<?php //require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/navbar.php'; ?>
<?php if($_SESSION['user_role'] != 'ht_manager'): ?>
        <?php redirect('users/login'); ?>
        <?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>

