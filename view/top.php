<?php
require_once('lib/print.php');
?>

<!doctype html>
<html>
    <head>
        <title><?php print_title()?></title>
    </head>
    <body>
        <h1><a href="test.php">Home</a></h1>
        <ol>
            <?php print_list();?>
        </ol>