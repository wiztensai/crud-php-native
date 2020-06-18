<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../../config/database.php';
    include_once '../../class/buku.php';

    $database = new Database();
    $db = $database->getConnect();

    $items = new Buku($db);
    
    $items->judul = $_POST["judul"];
    $items->categ_id = $_POST["categ_id"];
    $items->writer_id = $_POST["writer_id"];

    $result = $items->tambahBuku();


    // if($result){
        
    // }

    // else{
    //     http_response_code(404);
    //     echo json_encode(
    //         array("message" => "No record found.")
    //     );
    // }
?>