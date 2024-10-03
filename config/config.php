
<?php

//host
try{
    //declaring host as a constant
define("HOST", "localhost");

// db name
define("DBNAME", "art");

// user
define("USER", "root");

// password
define("PASS", "");


    // connection using php data object
$conn = new PDO ("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);

    // executing
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // catching the error
} catch (PDOException $Exception) {
    echo "error: ".$Exception->getMessage();
}