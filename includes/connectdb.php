<?php

$connectdb = mysqli_connect('localhost', 'root', '', 'blog'); 

if(mysqli_connect_errno()){
    echo "Error connecting to database";
}

session_start();

?>