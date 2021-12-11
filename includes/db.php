<?php

    $server = "sql100.epizy.com";
    $username = "epiz_30361226";
    $password = "uTwcwhbTSugfr";
    $dbname = "epiz_30361226_Grammie";

    $conn = mysqli_connect($server, $username ,$password ,$dbname)

    if(!$conn){
        die("fuck:",mysqli_connect_error());
    }





?>