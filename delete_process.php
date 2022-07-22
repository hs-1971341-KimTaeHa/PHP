<?php
    unlink('data/'.$_POST['id']);
    header('Location: /test.php');
?>