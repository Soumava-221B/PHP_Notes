/*
$var = 'PHP Tutorial'.

Put the said variable into the title section, h3 tag and as an anchor text within an HTML document.
*/

<?php 

$var = 'PHP Tutorial';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html: charset=utf-8">

        <title><?php echo $var; ?> - W3resource!</title>
    </head>
    <body>
        <h3><?php echo $var ?></h3>
    </body>
</html>