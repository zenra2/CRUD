<?php


Try{

    $host = "localhost";
    $username = "root";
    $root = "";
    $database = "library";
    
    $conn = new mysqli($host, $username, $root, $database);

    if($conn->connect_error){
        die("Database connection unsuccessful". $conn->connect_error);
        return;
    }

}catch(\Exception $e){
     echo "Error: ".$e;
}


?>