<?php

// This file only consists of Database class
class Database
{
    public $connection;

    public function __construct($dbConfig)
    {
        $host = $dbConfig['host'];
        $dbname = $dbConfig['dbname'];
        $port = $dbConfig['port'];
        $charset = $dbConfig['charset'];
        $user = $dbConfig['user'];
        $password = $dbConfig['password'];

        $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=$charset;user=$user;password=$password";

        // echo 'Connecting to <pre>' . $dsn . "</pre>\n";

        $this->connection = new PDO($dsn, null, null, array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}