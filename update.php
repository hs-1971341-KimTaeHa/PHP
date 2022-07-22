<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
        } else{
            echo "Welcome";
            }
    }

    function print_list(){
        $list = scandir("./data");
        //$contents = file_get_contents("data/".$_GET['id']);
        $i = 0;
        while($i<count($list)){
            if($list[$i] != '.' && $list[$i] != '..'){
            echo "<li><a href=\"?id=$list[$i]\">$list[$i]</a></li>";
            }
            $i += 1;
        }
    }

    function print_description(){
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
            } else {
                echo "WEB is...";
            } 
    }
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

        <form action="update_process.php" method="post">
            <p><input type="hidden" name="old_title" value="<?=$_GET['id']?>"></p>
            <p><input type="text" name="title" value="<?php print_title(); ?>"></p>
            <p><textarea name="description"><?php print_description(); ?></textarea></p>
            <p><input type="submit" value="update"></p>
        </form>
    </body>
</html>