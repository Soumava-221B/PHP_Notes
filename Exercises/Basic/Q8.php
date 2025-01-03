// Write a e PHP script to display string, values within a table.

<?php
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';

$url = parse_url($url);

// Display the protocol
echo 'Scheme : ' . $url['scheme'] . "\n";

// Display the domain
echo 'Host : ' . $url['host'] . "\n";

// Disply the path
echo 'Path : ' . $url['path'] . "\n";
?>