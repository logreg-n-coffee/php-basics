<?php

require "Database.php";

$config = require("config.php");

$db = new Database($config['database']);

// get all posts
$posts = $db->query("SELECT * FROM posts")->fetchAll();

// print the post list
foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

// get one post with query item - http://localhost:3000/6-environments-and-config-flexibility/?id=1
$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = ?"; // query can also be presented as "SELECT * FROM posts WHERE id = :id"
$post = $db->query($query, [$id])->fetch(); // if query is presented in another way, then we need an associative array here: $post = $db->query($query, [':id' => $id])->fetch();

echo "The unique post queried is: " . $post['title'];