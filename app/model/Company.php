<?php

namespace App\App\Model;

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
		return $this->country;
	}

	public function setCountry(string $country) {
		$this->country = $country;
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