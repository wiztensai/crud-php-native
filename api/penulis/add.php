<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../../config/database.php';
    include_once '../../class/penulis.php';

    $database = new Database();
    $db = $database->getConnect();

    $items = new Penulis($db);
    
    $items->nama = $_POST["nama"];    

    $result = $items->tambahPenulis();
?>