<?php require('partials/head.php'); ?>

    <h1>All Companies</h1>

<?php foreach ($company as $val) : ?>
    <td><?= $val->name; echo " |"; ?></td>
    <td><?= $val->address; echo " |";?></td>
    <td><?= $val->street; echo " |";?></td>
    <td><?= $val->city; echo " |";?></td>
    <td><?= $val->country; echo " |";?></td>
    <td><?= $val->email; echo " |";?></td>
    <br>

<?php endforeach; ?>

<?php require('partials/footer.php'); ?>
