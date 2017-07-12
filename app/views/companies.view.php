<?php require('partials/head.php'); ?>

    <h1>All Companies</h1>
<table>
	<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Street</th>
		<th>City</th>
		<th>Country</th>
		<th>Email</th>
	</tr>
<?php foreach ($company as $val) : ?>
	<tr>
	    <td><?= $val->name; ?></td>
	    <td><?= $val->address; ?></td>
	    <td><?= $val->street; ?></td>
	    <td><?= $val->city; ?></td>
	    <td><?= $val->country; ?></td>
	    <td><?= $val->email; ?></td>
	</tr>

<?php endforeach; ?>
</table>
<?php require('partials/footer.php'); ?>
