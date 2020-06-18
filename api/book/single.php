<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../../config/database.php';
    include_once '../../class/buku.php';

    $database = new Database();
    $db = $database->getConnect();

    $items = new Buku($db);

    $items->id = isset($_GET['id']) ? $_GET['id'] : die();

    if($res = $items->getSingleBook()){

        $emp_arr = array(
            "id" =>  $res->id,
            "judul" => $res->judul,
            "categ_id" => $res->categ_id,
            "writer_id" => $res->writer_id
        );
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Data not found.");
    }
?>