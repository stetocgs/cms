<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\RegexpValidator;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    public function register()
    {


        $isInputValid = 0 === strcmp($_POST['password_rep'], $_POST['password'])
                        && RegexpValidator::validatePassword ($_POST['password'])
                        && RegexpValidator::validateUsername ($_POST['username'])
                        && RegexpValidator::validateEmail ($_POST['email']);


        if($isInputValid)
        {
            App::get ( 'database' )->insert ( 'users', [
                'username' => $_POST[ 'username' ],
                'password' => $_POST[ 'password' ],
                'email'    => $_POST[ 'email' ]
            ] );

            return redirect ( 'login' );

        }else{

           return view('register', [
              'userMessage' => 'Some register fields are not valid, try again!'
           ]);

        }
    }

    public function login()
    {
        $isInputValid = RegexpValidator::validateUsername ($_POST['username'])
                        && RegexpValidator::validatePassword ($_POST['password']);

        $loginStatus = $isInputValid && App::get('database')->doLogin($_POST['username'], $_POST['password']);

        if($loginStatus)
        {
            session_start ();
            $_SESSION['my_data']['username'] = $_POST['username'];
            $_SESSION['my_data']['session_hash'] = md5(rand().$_POST['username'].rand());
            App::get ( 'database' )->updateTable ( 'users', [
                'username' => $_POST[ 'username' ]
            ], [
                'session_hash' => $_SESSION['my_data']['session_hash']
            ]);
        }

        return view('login',[
            'loginStatus' => $loginStatus ? 'Success!' : 'Wrong username or password, try again!'
        ]);
    }

    public function logout()
    {
            session_start();
            session_unset ();
            session_destroy ();
            return redirect ('');
    }


}
