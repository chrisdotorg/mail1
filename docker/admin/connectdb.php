<?php
    $url ="mysql:host=mysql;dbname=messagerie";
    $user = "user";
    $password = "user";
    try{
        $bdd = new PDO($url,$user,$password);
    }
    catch(Exception $e){
      die($e->getMessage());
    }
?>