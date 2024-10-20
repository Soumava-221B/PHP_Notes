<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/') {
    require 'controlers/index.php';
} else if($uri === '/about') {
    require 'controlers/about.php';
} else if ($uri === '/contact') {
    require 'controlers/contact.php';
}