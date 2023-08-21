<?php

$connectdb = mysqli_connect('localhost', 'test', '', 'blog'); 

if(mysqli_connect_errno()){
    echo "Error connecting to database";
}

session_start();

?>