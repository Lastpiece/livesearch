<?php require 'db.php'?>
<?php
function viewData(){
    global $connect;
    $query = "SELECT * FROM students";
    $stmt = $connect->query($query);
}

function addition($nb1, $nb2){
    return $nb1 + $nb2;
}

function searchData($name){
    $query = "";
    $stmt = $connect->prepare($query);
    stmt->execute(["name" -> "%".$name."%"])
}