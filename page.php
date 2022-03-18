<?php
session_start();
?>

<div style="width:1000px;margin:150px auto 0 auto;">
    <?php if (!empty($_SESSION['error'])): ?>
        <?php foreach ($_SESSION['error'] as $value): ?>
            <?php echo $value; ?>
        <?php endforeach; ?>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <?php if (!empty($_SESSION['success'])): ?>

            <?php echo $_SESSION['success']; ?>
        <?php unset($_SESSION['success']); ?>
    <?php endif; ?>

    <?php if (!empty($_SESSION['file'])): ?>
    <img src="resource/<?php echo $_SESSION['file']; ?>" style="width: 400px" alt=""/>
        <?php unset($_SESSION['file']); ?>
    <?php endif; ?>
</div>

