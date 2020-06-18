<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../../config/database.php';
    include_once '../../class/kategori.php';

    $database = new Database();
    $db = $database->getConnect();

    $items = new Kategori($db);

    $result = $items->getKategori();

    $itemCount = $result->num_rows;

    if($itemCount > 0){
        
        $dataArr = array();

        while ($obj = mysqli_fetch_object($result)) {
            $e = array(
                "id" => $obj->id,
                "nama" => $obj->nama
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