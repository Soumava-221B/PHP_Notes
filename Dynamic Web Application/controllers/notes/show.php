<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $currentUserId = 1;

    $note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    // form was submitted. delete the current note.
    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);


    header('location: /notes');
    exit();
} else {

    $note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    view("notes/show.view.php", [
        'heading' => 'Note',
        'note' => $note
    ]);

}