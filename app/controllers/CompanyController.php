<?php

namespace App\Controllers;

use App\Core\App;
use App\App\Model\Company;


class CompanyController
{

    public function showcompanies()
    {
        $company = App::get('database')->selectAll('company');
       // var_dump($company);
$fp = fopen('public/html/api/results.json', 'w');
fwrite($fp, '{ "aaData":');
fwrite($fp, json_encode($company));
fwrite($fp, '}');
fclose($fp);
        //return view('companies', compact('company'));
    return view('/companies');
    }


// $response = array();
// $posts = array();
// $result=mysql_query($sql);
// while($row=mysql_fetch_array($result)) 
// { 
// $title=$row['title']; 
// $url=$row['url']; 

// $posts[] = array('title'=> $title, 'url'=> $url);

// } 

// $response['posts'] = $posts;

// $fp = fopen('results.json', 'w');
// fwrite($fp, json_encode($response));
// fclose($fp);

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