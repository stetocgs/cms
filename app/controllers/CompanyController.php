<?php

namespace App\Controllers;

use App\Core\App;
use App\app\model\Company;


class AddCompanyController{


	// public function __construct($viewResolver,
	// 						$database) {
	// 	$pdo = $queryBuilder->getPDO();

	// 	}
	public function addingCompany(){
		$name = $_POST['name_company'];	
		$address = $_POST['address_company'];
		$street = $_POST['street_company'];
		$city = $_POST['city_company'];
		$country = $_POST['country_company'];		
		$nip = $_POST['NIP_company'];
		$email = $_POST['email_company'];


	$company = new Company(
			strip_tags($name),
			strip_tags($address),
			strip_tags($street),
			strip_tags($city),
			strip_tags($country),
			strip_tags($nip),
			strip_tags($email)
			);

	if (InsertDataOfCompany($company)) {
		return view('add_company');

	}



}
    private function InsertDataOfCompany($company){
        $name = $company->GetName();
        $address = $company->GetAddress();
        $street = $company->GetStreet();
        $city = $company->GetCity();
        $country = $company->GetCountry();
        $nip = $company->GetNip();
        $email = $company->GetEmail();


		insert();
    
		    App::get ( 'database' )->insert ( 'company', [
                'name' => $name,
                'address' => $address,
                'street' => $street,
                'city' => $city,
                'country' => $country,
                'nip' => $nip,
                'email' => $email
            ] );

            return redirect ( 'login' );
    }

}



