<?php

namespace App\Controllers;

use App\Core\App;
use App\Company;


class AddCompanyController{


	// public function __construct($viewResolver,
	// 						$database) {
	// 	$pdo = $queryBuilder->getPDO();

	// 	}
	public function addingCompany(){
		$name = $_POST['name_company'];	
		$address = $_POST['address_company'];
		$country = $_POST['country_company'];
		$street = $_POST['street_company'];
		$city = $_POST['city_company'];
		$email = $_POST['email_company'];
		$nip = $_POST['NIP_company'];

		$company = new Company(
			strip_tags($name),
			strip_tags($address),
			strip_tags($street),
			strip_tags($city),
			strip_tags($nip),
			strip_tags($email)
			);
	if (InsertDataOfCompany($company)) {
		return view('add_company');

	}



}


}



