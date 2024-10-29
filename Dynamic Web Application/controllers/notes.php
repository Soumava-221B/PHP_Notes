<?php

$config = require('views/config.php');
$db = new Database($config['database']);


$heading = 'My Notes';

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->fetchAll();


require "views/notes.views.php";
