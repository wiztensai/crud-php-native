<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../../config/database.php';
    include_once '../../class/buku.php';
    
    $database = new Database();
    $db = $database->getConnect();

    $items = new Buku($db);
    
    $data = json_decode(file_get_contents("php://input"));
    
    var_dump($data);
    
    $item->id = $data->id;
    $item->judul = $data->judul;
    $item->categ_id = $data->categ_id;
    $item->writer_id = $data->writer_id;
    
    if($item->updateEmployee()){
        echo json_encode(true);
    } else{
        echo json_encode(false);
    }
?>