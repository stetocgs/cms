<?php
    /**
     * Created by PhpStorm.
     * User: stefan
     * Date: 7/11/17
     * Time: 10:35 AM
     */

    namespace App\Core;


    class ContactManager
    {
        protected $username;
        protected $userid;
        protected $contacts = [];

        function __construct ($userid)
        {

        }

        /**
         * @return array
         */
        public function getContacts (): array
        {
            return $this->contacts;
        }


    }