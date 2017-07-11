<?php

namespace App\Controllers;

use App\Core\App;
//use App\App\Model\Company;
class Company {
	
	private $name;
	private $address;
	private $street;
	private $city;
	private $country;
	private $email;
	private $nip;

	public function __construct($name, $address, $street, $city, $country, $nip, $email) {
		$this->name =$name;
		$this->address = $address;
		$this->street = $street;
		$this->city = $city;
		$this->country = $country;
		$this->nip = $nip;
		$this->email = $email;
	}

	public function getName() {
		return (string)$this->name;
	}

	public function setName(string $name) {
		$this->name = $name;
	}

	public function getAddress() {
		return $this->address;
	}

	public function setAddress(string $address) {
		$this->address = $address;
	}

	public function getStreet() {
		return $this->street;
	}

	public function setStreet(string $street) {
		$this->street = $email;
	}
	public function getCity() {
		return $this->city;
	}

	public function setCity(string $city) {
		$this->city = $city;
	}
	public function getCountry() {
		return $this->cuntry;
	}

	public function setCountry(string $cuntry) {
		$this->cuntry = $cuntry;
	}
	public function getNip() {
		return $this->nip;
	}

	public function setNip(string $nip) {
		$this->nip = $nip;
	}
	public function getEmail() {
		return $this->email;
	}

	public function setEmail(string $email) {
		$this->email = $email;
	}
}

class CompanyController
{

    public function showcompanies()
    {
        $company = App::get('database')->selectAll('company');

        return view('companies', compact('company'));
    }


	// public function __construct($viewResolver,
	// 						$database) {
	// 	$pdo = $queryBuilder->getPDO();

	// 	}
	public function addingCompany()
	{
		//echo 'here';
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

			// if (InsertDataOfCompany($company)) {
			// 	return view('add_company');


App::get ( 'database' )->insert ( 'company', [
		                'name' => $company->GetName(),
		                'address' => $company->GetAddress(),
		                'street' => $company->GetStreet(),
		                'city' => $company->GetCity(),
		                'nip' => $company->GetNip(),
		                'email' => $company->GetEmail()
		            ] );
			return view('add_company');



		}
		 //    public function InsertDataOfCompany($data){
		 //        $name = $data->GetName();
		 //        $address = $data->GetAddress();
		 //        $street = $data->GetStreet();
		 //        $city = $data->GetCity();
		 //        $country = $data->GetCountry();
		 //        $nip = $data->GetNip();
		 //        $email = $data->GetEmail();

		 //        var_dump($data);
		    
			// 	    // App::get ( 'database' )->insert ( 'company', [
		 //      //           'name' => $name,
		 //      //           'address' => $address,
		 //      //           'street' => $street,
		 //      //           'city' => $city,
		 //      //           'country' => $country,
		 //      //           'nip' => $nip,
		 //      //           'email' => $email
		 //      //       ] );

		 //            //return true;
   // }

}



