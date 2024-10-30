<?php

require 'functions.php';
require 'views/Database.php';
require 'views/Response.php';
require 'router.php';



// $id = $_GET['id'];
// when accepting user input through query string or form never inline it as a part of the sql query because if you do that it will create an SQL injection Vulnerabilities 

// $query = "SELECT * FROM posts WHERE id = {$id}";  
// insted you can replace it with an ?
// $query = "SELECT * FROM posts WHERE id = ?";

// var_dump($query);

// $posts = $db->query($query, [$id])->fetch();

// var_dump($posts);