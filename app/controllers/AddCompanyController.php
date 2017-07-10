<?php

namespace App\Controllers;


class Company
{

    private $name;
    private $address;
    private $city;
    private $country;
    private $email;
    private $nip;

    public function __construct ($name, $address, $city, $country, $nip, $email)
    {
        $this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->country = $country;
        $this->nip = $nip;
        $this->email = $email;
    }

    public function getName ()
    {
        return (string)$this->name;
    }

    public function setName (string $name)
    {
        $this->name = $name;
    }

    public function getAddress ()
    {
        return $this->address;
    }

    public function setAddress (string $address)
    {
        $this->address = $address;
    }

    public function getCity ()
    {
        return $this->city;
    }

    public function setCity (string $city)
    {
        $this->city = $city;
    }

    public function getCountry ()
    {
        return $this->cuntry;
    }

    public function setCountry (string $cuntry)
    {
        $this->cuntry = $cuntry;
    }

    public function getNip ()
    {
        return $this->nip;
    }

    public function setNip (string $nip)
    {
        $this->nip = $nip;
    }

    public function getEmail ()
    {
        return $this->email;
    }

    public function setEmail (string $email)
    {
        $this->email = $email;
    }
}


class AddCompanyController
{


    // public function __construct($viewResolver,
    // 						$database) {
    // 	$pdo = $queryBuilder->getPDO();

    // 	}
    public function addingCompany ()
    {
        $name = $_POST[ 'name_company' ];
        $address = $_POST[ 'address_company' ];
        $country = $_POST[ 'country_company' ];
        $street = $_POST[ 'street_company' ];
        $city = $_POST[ 'city_company' ];
        $email = $_POST[ 'email_company' ];
        $nip = $_POST[ 'NIP_company' ];

        $company = new Company(
            strip_tags ( $name ),
            strip_tags ( $address ),
            strip_tags ( $street ),
            strip_tags ( $city ),
            strip_tags ( $nip ),
            strip_tags ( $email )
        );

        //       if (InsertDataOfCompany ( $company )) {
        return view ( 'add_company' );

        //       }


    }
}






