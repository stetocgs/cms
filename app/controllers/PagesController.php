<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function login ()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function postlogin()
    {
        return view('postlogin');
    }

    public function contacts ()
    {
        return view('contacts');
    }
    public function company()
    {
        return view('company');
    }
    public function company_v2()
    {
        return view('company_v2');
    }
    public function companies()
    {
        return view('companies');
    }
}
