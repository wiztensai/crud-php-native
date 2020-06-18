<?php
    include_once ('../../config/constant.php');
	include_once ('../../utils/http.php');

    if(isset($_POST['tambah'])){
        
        $post = [     
            'judul' =>  $_POST['judul'],
            'categ_id'   => $_POST['categ_id'],
            'writer_id'   => $_POST['writer_id']
        ];

        $res = post_decode($url_book_add, $post);
        header('Location: ../../index.php');
    
    } else {
        die("Akses dilarang...");
    }
?>