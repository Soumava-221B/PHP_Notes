<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    require (base_path("Core/{$class}.php"));
}); 

require base_path('Core/router.php');



// $id = $_GET['id'];
// when accepting user input through query string or form never inline it as a part of the sql query because if you do that it will create an SQL injection Vulnerabilities 

// $query = "SELECT * FROM posts WHERE id = {$id}";  
// insted you can replace it with an ?
// $query = "SELECT * FROM posts WHERE id = ?";

// var_dump($query);

// $posts = $db->query($query, [$id])->fetch();

// var_dump($posts);