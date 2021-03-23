<?php require VIEW_ROOT . '/templates/header.php'?>

<?php if (!$page): ?>
    <p>No pages found, sorry</p>
<?php else: ?>
    <h2><?php echo e($page['title'])?></h2>
    <?php echo e($page['body']);?>
    <p class="faded">
        Created on <?php echo (new DateTime($page['created']))->format('jS M Y');   ?>
        </br>
        <?php if ($page['updated']): ?>
            Last update <?php echo (new DateTime($page['updated']))->format('D M Y');?>
        <?php endif; ?>
    </p>


<?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'?>