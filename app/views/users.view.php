<?php require($_SERVER['DOCUMENT_ROOT'] . '/app/views/partials/head.php'); ?>

<h1>All Users</h1>

<?php foreach ($users as $user) : ?>
    <li><?= $user->username.':'.$user->password; ?></li>
<?php endforeach; ?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/app/views/partials/footer.php'); ?>





