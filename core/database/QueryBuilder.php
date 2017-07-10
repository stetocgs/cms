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
            return false;
            die("Exception occurred: {$e}");
        }
    }


    public function updateTable($table, $condition, $values)
    {

        $conditionArray = array_map (function($key){

        });

        $query = sprintf("update %s set %s where %s",
            $table, );

    }

    /**
     * @param $table
     * @param $parameters
     *
     * @return bool
     */
    public function validateUser($table, $parameters)
    {
        $paramArray = array_map(function ($key){
            return "{$key} = :{$key}";
        }, array_keys($parameters));

        $sqlString = sprintf('select id from %s where %s',
            $table, implode(' and ', $paramArray));

        $query = $this->pdo->prepare ($sqlString);
        $query->execute ($parameters);
        return 1 === $query->rowCount ();
    }

    /**
     * @param $username
     * @param $password
     *
     * @return bool
     */
    public function doLogin ($username, $password)
    {
        $status = $this->validateUser('users', [
            'username' => $username,
            'password' => $password
        ]);

        return $status;
    }
}
