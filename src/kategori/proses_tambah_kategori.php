<?php
    include_once ('../../config/constant.php');
	include_once ('../../utils/http.php');

    if(isset($_POST['tambah'])){
        
        $post = [     
            'nama' =>  $_POST['nama']
        ];

        $res = post_decode($url_kategori_add, $post);
        header('Location: ../../?page=kategori');
    
    } else {
        die("Akses dilarang...");
    }
?>