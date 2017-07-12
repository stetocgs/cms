<?php
    /**
     * Created by PhpStorm.
     * User: stefan
     * Date: 7/11/17
     * Time: 9:27 AM
     */

    namespace App\Core;


    class SessionHandler
    {
        protected $username;
        protected $sessionHash;
        protected $sessionVariables = [];

        public function __construct ($username, $password)
        {
            $this->username = $username;
            $this->setSessionVariable ('username', $username);
            $this->sessionHash = $this->calculateSessionHash ();
            $this->login ($password);
        }

        /**
         * @return string
         */
        protected function calculateSessionHash ()
        {
            return md5(rand().rand().$this->username.rand().rand());
        }


        /**
         * @param $password
         */
        protected function login ($password)
        {
            $isInputValid = RegexpValidator::validateUsername ( $this->username )
                            && RegexpValidator::validatePassword ( $password );

            $loginStatus = $isInputValid
                           && App::get ( 'database' )
                               ->doLogin ( $this->username, $password );

            if ($loginStatus) {
                session_start ();

                App::get ( 'database' )->updateTable ( 'users',
                    array('username' => $this->username),
                    array('session_hash' => $this->sessionHash));
            }
        }

        /**
         * @return string
         */
        public function getSessionHash (): string
        {
            return $this->sessionHash;
        }


        /**
         * @return string
         */
        public function getUsername (): string
        {
            return $this->username;
        }

        /**
         * @param $key
         *
         * @return mixed|null
         */
        public function getSessionVariable ($key)
        {
            if(array_key_exists($key,$this->sessionVariables))
                return $this->sessionVariables[$key];

            return null;
        }

        /**
         * @param $key
         * @param $variable
         */
        public function setSessionVariable($key, $variable)
        {
            $this->sessionVariables[$key] = $variable;
        }

        /**
         * @return bool
         */
        public function isLogged ()
        {
            return PHP_SESSION_ACTIVE == session_status ()
                   && App::get ( 'database' )
                       ->rowExists ( 'users', [
                           'username'     => $this->username,
                           'session_hash' => $this->sessionHash
                       ] );
        }

        /**
         * @return mixed
         */
        public function isAdmin ()
        {
            return  App::get ( 'database' )->rowExists ( 'users', [
                'username'     => $this->username,
                'session_hash' => $this->sessionHash,
                'user_group'   => 1
            ] );
        }
    }