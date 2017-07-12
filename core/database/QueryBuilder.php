<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    /**
     * Insert a record into a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );


        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (\Exception $e) {
            die("Exception occurred: {$e}");
        }
        return true;
    }


    /**
     * @param $table
     * @param $conditions
     * @param $values
     */
    public function updateTable ($table, $conditions, $values)
    {

        $valuesArray = array_map ( function ($key) {
            return "{$key} = :{$key}";
        }, array_keys ( $values ) );


        $conditionArray = array_map (function($key, $value){
            return "{$key} = '{$value}'";
        }, array_keys ( $conditions ), array_values ($conditions) );

        $query = sprintf("update %s set %s where %s",
            $table, implode ( ', ', $valuesArray ), implode ( ' and ', $conditionArray ) );

        $statement = $this->pdo->prepare ( $query );
        $statement->execute ($values);

    }

    /**
     * @param $table
     * @param $parameters
     *
     * @return bool
     */
    public function rowExists ($table, $parameters): bool
    {
        $paramArray = array_map(function ($key){
            return "{$key} = :{$key}";
        }, array_keys($parameters));

        $sqlString = sprintf ( 'select * from %s where %s',
            $table, implode(' and ', $paramArray));

        $query = $this->pdo->prepare ($sqlString);
        $query->execute ($parameters);

        return 0 < $query->rowCount ();
    }


    /**
     * @param $table
     * @param $selected
     * @param $checked
     * @return mixed
     */
    public function selectOne($table, $selected, $checked)
    {
        $template = 'select %s from %s where %s';
        $toSelect = implode(', ', $selected);
        $toCheck = implode(' and ', array_map(function ($input) {
            return "${input} = :${input}";
        }, array_keys($checked)));
        $sql = sprintf($template, $toSelect, $table,  $toCheck);
        $query = $this->pdo->prepare($sql);
        $query->execute($checked);

        return $query->fetch(PDO::FETCH_ASSOC);
    }


    /**
     * @param $pass
     * @param $salt
     * @return string
     */
    public function hashPassword($pass, $salt)
    {
        return md5($salt.$pass.$salt);
    }

    /**
     * @param $username
     * @param $password
     *
     * @return bool
     */
    public function doLogin ($username, $password)
    {
        $salt = $this->selectOne('users', ['pass_salt'], ['username' => $username])['pass_salt'];
        $salted_pass = $this->hashPassword($password,$salt);
        return $this->rowExists ( 'users', [
            'username' => $username,
            'password' => $salted_pass
        ] );
    }

    /**
     * @param $username
     * @param $session_hash
     *
     * @return bool
     */
    public function verifySessionHash ($username, $session_hash)
    {
        return $this->rowExists ( 'users', compact ( 'username', 'session_hash' ) );
    }

}
