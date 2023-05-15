<?php
/* ---------------------------------------------------------------- */
// environment variables
$server = "localhost";
$database = "php_study_code";
$port = 3306;
$user = "root";
$password = "Ryan1023";
$charset = "utf8mb4";


/* ---------------------------------------------------------------- */
// line by line implementation
// connect to a MYSQL server / database 

// data source name 
$dsn = "mysql:host=$server;dbname=$database;port=$port;user=$user;password=$password;charset=$charset";

// instantiate pdo class
$pdo = new PDO($dsn);

// prepare the query statement 
$statement = $pdo->prepare("SELECT * FROM posts");

// execute the query
$statement->execute();

// get the posts
$posts = $statement->fetchAll(PDO::FETCH_ASSOC); // double colon (::) is used to access static methods, constants, and properties of a class

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

/* ---------------------------------------------------------------- */
// class based 

class TestDatabase
{
    public $connection;

    // constructor
    public function __construct($server, $database, $port, $user, $password, $charset)
    {
        $dsn = "mysql:host=$server;dbname=$database;port=$port;user=$user;password=$password;charset=$charset";
        $this->connection = new PDO($dsn);
    }
    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC); // will return an array of arrays
    }
}

// instantiate the Database class
$db = new TestDatabase($server, $database, $port, $user, $password, $charset);
$myPosts = $db->query("SELECT * FROM posts");

foreach ($myPosts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}