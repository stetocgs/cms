<?php

namespace App\Controllers;

use App\Core\App;
use App\App\Model\Company;


class CompanyController
{

    public function showcompanies()
    {
        $company = App::get('database')->selectAll('company');

        return view('companies', compact('company'));
    }



    public function addingCompany()
    {

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

    //Inserting Company into database and Message about status od adding company
        if(App::get ( 'database' )->insert ( 'company', [
            'name' => $company->GetName(),
            'address' => $company->GetAddress(),
            'street' => $company->GetStreet(),
            'city' => $company->GetCity(),
            'country' => $company->GetCountry(),
            'nip' => $company->GetNip(),
            'email' => $company->GetEmail()
             ] ))
             return view('companies');
        
        else{ 
             return view('company',[
                'AddingStatus' => 'Error! Email is in use!'
        ]);

    }


    }
    public function addingCompany_v2()
        {

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

        //Inserting Company into database and Message about status od adding company
            if(App::get ( 'database' )->insert ( 'company', [
                'name' => $company->GetName(),
                'address' => $company->GetAddress(),
                'street' => $company->GetStreet(),
                'city' => $company->GetCity(),
                'country' => $company->GetCountry(),
                'nip' => $company->GetNip(),
                'email' => $company->GetEmail()
                 ] ))
                {
                     return view('company_v2',['AddingStatus' => 'Company added!' ]);
                }
            
            else{ 
                     return view('company_v2',['AddingStatus' => 'Error! Invalid data. Email is in use']);

                 }


        }


}