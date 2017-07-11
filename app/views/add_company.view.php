<?php require('partials/head.php'); ?>


	<h1>Add new company</h1>

		<form method="POST" action="/add_company">
		<ul style="list-style-type:none">
			Company name: 
			<li><input type="text" name="name_company" required ></li><br>
			Address of company:
			<li><input type="text" name="address_company" required></li><br>
			Street:
			<li><input type="text" name="street_company"></li><br>
			City:
			<li><input type="text" name="city_company" required></li><br>
			Country:
			<li><input type="text" name="country_company" required></li><br>
			NIP:
			<li><input type="text" name="NIP_company" maxlength="10" pattern="[1-9] required" ></li><br>
			Email of the company:
			<li><input type="email" name="email_company" required></li><br>
			<input value="checkbox" type="checkbox" required> Zgoda na przetwarzanie informacji.<br>
			<li><button type="submit" name="submit">Finish</button></li>
			<li><button type="reset">Clean</button></li>

		</ul>
	</form>

<?php require('partials/footer.php'); ?>