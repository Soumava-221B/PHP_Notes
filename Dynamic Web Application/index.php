<?php

require 'functions.php';
// require 'router.php';


// class Person {
//     public $name;
//     public $age;
    
//     public function breath() {
//         echo $this -> name . ' is breathing!';
//     }
// }

// $person = new Person();

// $person -> name = 'John Doe';
// $person -> age = 25;

// dd($person -> name);
// $person -> breath();


// connect to our MySQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$username = 'root';
$password = 'test123';

// pdo instant
$pdo = new PDO($dsn, $username, $password);

// try {
//     $pdo = new PDO($dsn, $username, $password);
//     // Set the PDO error mode to exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

$statement = $pdo -> prepare("SELECT * FROM posts");
$statement -> execute();

$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}