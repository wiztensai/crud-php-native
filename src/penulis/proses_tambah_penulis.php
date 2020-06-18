<?php
    include_once ('../../config/constant.php');
	include_once ('../../utils/http.php');

    if(isset($_POST['tambah'])){
        
        $post = [     
            'nama' =>  $_POST['nama']
        ];

        $res = post_decode($url_penulis_add, $post);
        header('Location: ../../?page=penulis');
    
    } else {
        die("Akses dilarang...");
    }
?>