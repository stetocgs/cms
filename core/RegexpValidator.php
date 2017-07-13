<?php
    /**
     * Created by PhpStorm.
     * User: stefan
     * Date: 7/7/17
     * Time: 3:06 PM
     */

    namespace App\Core;



    class RegexpValidator
    {
        /**
         * @param $input
         * @param $pattern
         *
         * @return bool
         */
        static public function regexpValidate ($input, $pattern)
        {
            return 1 === preg_match ( $pattern, $input );
        }

        /**
         * @param $email
         *
         * @return bool
         */
        static public function validateEmail ($email)
        {
            return static::regexpValidate ( $email, '/^([\w\d_]+[\+\.]*[\w\d_]+@[\w\d_]+\.[\w\d]+)$/i' );
        }

        /**
         * @param $username
         *
         * @return bool
         */
        static public function validateUsername ($username)
        {
            return static::regexpValidate ( $username, '/^([\w\d_]{1,32})$/i' );
        }

        /**
         * @param $password
         *
         * @return bool
         */
        static public function validatePassword ($password)
        {
            //[ -~] - range from ' ' to '~'
            //matches all ascii characters
            return static::regexpValidate ($password,'/^([ -~]{1,32})$/i');
        }
    }