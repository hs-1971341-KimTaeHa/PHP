<?php
    file_put_contents('data/'.$_POST['title'], $_POST['description']);
    header('Location: /test.php?id='.$_POST['title']);
?>