// Write a PHP script, which changes the color of the first character of a word.

<?php 
$text = 'PHP Tutorial';

// Rgex to replace the first letter of each word with a span element with red color
$text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);

// Display text
echo $text;
?>