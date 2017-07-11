<?php require('partials/head.php'); ?>

    <h1>All Companies</h1>

<?php foreach ($company as $val) : ?>
    <td><?= $val->name;  ?></td> | 
    <td><?=$val->address; ?></td> | 
    <td><?= $val->street; ?></td> | 
    <td><?= $val->city; ?></td> | 
    <td><?= $val->country; ?></td> | 
    <td><?= $val->email; ?></td>

<?php endforeach; ?>

<?php require('partials/footer.php'); ?>
