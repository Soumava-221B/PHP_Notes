<?php

use Core\Validator;
use Core\App;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs
$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email';
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = 'Please provide a password of at least 8 characters';
}

if(! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors,
    ]);
}

$db = App::resolve(Database::class);
// check if the account already exists
$result = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email,
])->find();

if ($user) {
    // then someone with that email already exists and has an account.
    // If yes, redirect to a login page.
    header('location: /');
    exit();
} else {
    // If not, save one to the database, and then log the user in, and redirect.
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => $password,
    ]);

    // mark that the user has logged in.
    $_SESSION['user'] = [
        'email' => $email,
    ];

    header('location: /');
    exit();
}