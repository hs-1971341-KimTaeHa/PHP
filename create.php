<?php
require('lib/print.php');
require('view/top.php');
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
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])){ ?>
            <a href="update.php?id=<?=$_GET['id']?>">update</a>
        <?php } ?>

        <form action="create_process.php" method="post">
            <p><input type="text" name="title" placeholder="title"></p>
            <p><textarea name="description" placeholder="description"></textarea></p>
            <p><input type="submit" value="submit"></p>
        </form>
    </body>
</html>