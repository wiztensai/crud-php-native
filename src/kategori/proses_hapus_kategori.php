<?php
    include_once ('../../config/constant.php');
	include_once ('../../utils/http.php');

    $post = [
        'id' => $_GET['id']
    ];

    $res = post_decode($url_kategori_delete, $post);
    header('Location: ../..?page=kategori');
?>