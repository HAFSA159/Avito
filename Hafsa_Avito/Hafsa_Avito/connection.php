<?php
    $server = 'localhost';
    $username ='root';
    $password = '';
    $database = 'contactinfo';

    $conn = mysqli_connect($server, $username ,$password , $database);

    if(!$conn){
      echo 'failed';
    }else{
    //  echo 'connected';
    }
    
    ?>