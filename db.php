<?php require 'fonctions.php'?>
<?php
try{
    $connect = new PDO("mysql:host=localhost; dbname=dwfs2021", 'root','');
    $connect ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // if(empty($_SESSION['token'] = bin2hex(random_bytes(32)))){
    //     $_SESSION['token'] = bin2hex(random_bytes(32));    
    // }
    // $token = $_SESSION['token'];

} catch(PDOException $error){
    echo 'Erreur: '.$error->getMessage();
}