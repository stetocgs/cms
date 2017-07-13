<?php

namespace App\Controllers;

use App\Core\App;


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
    public function addContact()
    {
        if(App::isLogged())
        return view('/addcontact');

    else {
        return view('/login') ;
    }
    }
    public function editContact()
    {
        if(App::isLogged())
        return view('/edit-contact');
    else {
        return view('/login') ;
    }
    }


}
