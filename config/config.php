<?php

if(!isset($_SERVER{'HTTP_REFERER'})){
    //redirect them to your desired location
    header('location:http://localhost/NFT/about.php');
    exit;
} 

try{

    //Host
   if (!defined('HOST')) define("HOST", "localhost");
    //Database
    if (!defined('DBNAME')) define("DBNAME", "nft-lms");
    //User
    if (!defined('USER')) define("USER", "root");
    //Password
    if (!defined('PASS')) define("PASS", "");




    
 
    


    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*
    if($conn == true) {
        echo "connected successfully";
    } else {
        echo "error";
    }
    */
    } catch (PDOException $e) {
    echo $e->getmessage();
}

?>