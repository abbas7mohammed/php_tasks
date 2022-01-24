<?php


    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = $_REQUEST['title'];
        $detail = $_REQUEST['detail'];

        echo "<h2>Your Todo:</h2>";
        echo "<br>";
        if(empty($title) || empty($detail)){
            echo "All fields are required";
        }else{
            echo <<<GFG
                <li>$title</li>
                GFG;
            echo "<br>";
            echo <<<GFG
                <ul>$detail</ul>
                GFG;        
            }
    }
?>