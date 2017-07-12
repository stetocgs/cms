<?php

    namespace App\Controllers;

    use App\Core\App;
    use App\Core\RegexpValidator;
    use App\Core\SessionHandler;


    class UsersController
    {
        public function index ()
        {
            return view ( 'users' );
        }

        public function register ()
        {


            $isInputValid = 0 === strcmp ( $_POST[ 'password_rep' ], $_POST[ 'password' ] )
                            && RegexpValidator::validatePassword ( $_POST[ 'password' ] )
                            && RegexpValidator::validateUsername ( $_POST[ 'username' ] )
                            && RegexpValidator::validateEmail ( $_POST[ 'email' ] );


            if ($isInputValid) {

                $salt = md5(rand().rand());
                $hashed_password =  App::get('database')->hashPassword($_POST['password'], $salt);

                App::get ( 'database' )->insert ( 'users', [
                    'username' => $_POST[ 'username' ],
                    'password' => $hashed_password,
                    'email'    => $_POST[ 'email' ],
                    'pass_salt' => $salt
                ] );

                return redirect ( 'login' );

            } else {

                return view ( 'register', [
                    'userMessage' => 'Some register fields are not valid, try again!'
                ] );

            }
        }

        public function login ()
        {
            if(App::isLogged())
            {
                return redirect('');

            }else {
                App::setSessionHandler (new SessionHandler($_POST['username'], $_POST['password']));

                return view('login', [
                    'callbackMessage' => 'Wrong username or password, try again!'
                ]);
            }
        }

        public function logout ()
        {
            session_start ();
            session_unset ();
            session_destroy ();

            return redirect ( '' );
        }

    }
