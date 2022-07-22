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