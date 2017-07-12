<?php

    namespace App\Controllers;

    use App\Core\App;
    use App\Core\RegexpValidator;
    use App\Core\SessionHandler;


    class UsersController
    {
        public function index ()
        {
            $users = App::get ( 'database' )->selectAll ( 'users' );

            return view ( 'users', compact ( 'users' ) );
        }

        public function register ()
        {


            $isInputValid = 0 === strcmp ( $_POST[ 'password_rep' ], $_POST[ 'password' ] )
                            && RegexpValidator::validatePassword ( $_POST[ 'password' ] )
                            && RegexpValidator::validateUsername ( $_POST[ 'username' ] )
                            && RegexpValidator::validateEmail ( $_POST[ 'email' ] );


            if ($isInputValid) {

                App::get ( 'database' )->insert ( 'users', [
                    'username' => $_POST[ 'username' ],
                    'password' => $_POST[ 'password' ],
                    'email'    => $_POST[ 'email' ]
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
            App::setSessionHandler (new SessionHandler($_POST['username'], $_POST['password']));

            if(App::isLogged() === true)
            {
                return redirect('');

            }else {

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
