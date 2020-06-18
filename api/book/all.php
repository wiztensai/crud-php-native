<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../../config/database.php';
    include_once '../../class/buku.php';

    $database = new Database();
    $db = $database->getConnect();

    $items = new Buku($db);

    $result = $items->getBooks();

    $itemCount = $result->num_rows;

    if($itemCount > 0){
        
        $dataArr = array();

        while ($obj = mysqli_fetch_object($result)) {
            $e = array(
                "id" => $obj->id,
                "judul" => $obj->judul,
                "categ_id" => $obj->categ_id,
                "writer_id" => $obj->writer_id,
                "writer_name" => $obj->writer_name,
                "category" => $obj->category
            );

            array_push($dataArr, $e);
        }

        echo json_encode($dataArr);
    }

    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
?>