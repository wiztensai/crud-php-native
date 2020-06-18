<?php
    define("APP_ROOT", dirname(__FILE__));
    
    $BASE_URL = "http://localhost/bukuapites/";

    $url_getbooks = $BASE_URL."api/book/all.php";
    $url_book_single = $BASE_URL."api/book/single.php";
    $url_book_update = $BASE_URL."api/book/update.php";
    $url_book_delete = $BASE_URL."api/book/delete.php";
    $url_book_add = $BASE_URL."api/book/add.php";

    $url_getpenulis = $BASE_URL."api/penulis/all.php";
    $url_penulis_delete = $BASE_URL."api/penulis/delete.php";
    $url_penulis_add = $BASE_URL."api/penulis/add.php";

    $url_getkategori = $BASE_URL."api/kategori/all.php";
    $url_kategori_delete = $BASE_URL."api/kategori/delete.php";
    $url_kategori_add = $BASE_URL."api/kategori/add.php";
?>