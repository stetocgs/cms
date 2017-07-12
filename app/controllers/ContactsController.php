<?php
/**
 * Created by PhpStorm.
 * User: mateusz
 * Date: 10.07.17
 * Time: 13:17
 */

namespace App\Controllers;
use App\Core\Database\QueryBuilder;
use App\Core\RegexpValidator;
use App\Core\App;


class ContactsController
{
    public function contacts ()
    {
        session_start ();
        $userid = App::get('database') -> selectUserByName(App::getSessionHandler()->getUsername());
        //$userid = 13;
        $contactslist = App::get ( 'database' )->selectContactsByUserID($userid[0]);
        $userscontactpath = sprintf('public/html/usersdata/contacts%s.json', $userid[0]);
        //die(var_dump($userscontactpath));
        $fp = fopen($userscontactpath, 'w');
        fwrite($fp, '{ "aaData":');
        fwrite($fp, json_encode($contactslist));
        fwrite($fp, '}');
        fclose($fp);

        return view('contacts', compact('contacts', 'userid'));
    }
    public function addContact(){
        session_start ();

        $isInputValid = true; /*===  RegexpValidator::validateUsername ( $_POST[ 'username' ] )
            && RegexpValidator::validateUsername ( $_POST[ 'username' ] )
            && RegexpValidator::validateEmail ( $_POST[ 'email' ] );*/

        $userid = App::get('database') -> selectUserByName(App::getSessionHandler()->getUsername());

        //echo $userid;
        if ($isInputValid) {
            App::get ( 'database' )->insert ( 'contacts', [
                'companyname' => $_POST[ 'companyname' ],
                'username' => $_POST[ 'username' ],
                'position' => $_POST[ 'position' ],
                'phonenumber' => $_POST[ 'phonenumber' ],
                'email' => $_POST[ 'email' ],
                'ownerid'    => $userid[0] ,
            ] );

            return redirect ( 'addcontact' );

        } else {

            return view ( 'contacts', [
                'userMessage' => 'Some register fields are not valid, try again!'
            ] );

        }
    }
}
