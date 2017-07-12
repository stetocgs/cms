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
      return  view(App::isLogged() ? 'index' : 'login' );
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
}
