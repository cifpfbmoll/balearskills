<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "user");
    define("DB_PASS", "password");
    define("DB_NAME", "library");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) 
          or die("Error establint la connexió: " . mysqli_connect_error());
  
?>