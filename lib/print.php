<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
        } else{
            echo "Welcome";
            }
    }

    function print_list(){
        $list = scandir("./data");
        $i = 0;
        while($i<count($list)){
            $title = htmlspecialchars($list[$i]);
            if($list[$i] != '.' && $list[$i] != '..'){
            echo "<li><a href=\"?id=$title\">$title</a></li>";
            }
            $i += 1;
        }
    }

    function print_description(){
        if(isset($_GET['id'])){
            $basename = basename($_GET['id']);
            echo htmlspecialchars(file_get_contents("data/".$basename));
            } else {
                echo "WEB is...";
            } 
    }
?>