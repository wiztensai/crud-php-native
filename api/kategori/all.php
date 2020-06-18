<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../../config/database.php';
    include_once '../../class/kategori.php';

    $database = new Database();
    $db = $database->getConnection();

    $items = new Kategori($db);

    $stmt = $items->getKategori();
    $itemCount = $stmt->rowCount();

    // echo json_encode($itemCount);

    if($itemCount > 0){
        
        $employeeArr = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $e = array(
                "id" => $id,
                "nama" => $nama
            );

            array_push($employeeArr, $e);
        }
        echo json_encode($employeeArr);
    }

    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }
?>