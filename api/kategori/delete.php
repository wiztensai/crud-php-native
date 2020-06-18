
<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    include_once '../../config/database.php';
    include_once '../../class/kategori.php';
    
    $database = new Database();
    $db = $database->getConnect();

    $items = new Kategori($db);

    $items->id = $_POST["id"];
    
    // echo json_encode($items);

    if($items->hapusKategori()){
        // echo json_encode(true);
    } else{
        // echo json_encode(false);
    }
?>