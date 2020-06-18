<!DOCTYPE html>
<html lang="en">
	
<?php
	include_once ('./config/constant.php');
	include_once ('./utils/http.php');

	include_once ('./src/templates/header.php');
?>

<body class="bg-gray-400 font-sans leading-normal tracking-normal">

<?php
	// routing single app
	if(isset($_GET['page'])) {
		
		$page = $_GET['page']; 

		if ($page == "edit_buku") {
			include_once("src/buku/form_edit_buku.php");
		}

		if ($page == "tambah_buku") {
			include_once("src/buku/form_tambah_buku.php");
		}

		if ($page == "penulis") {
			include_once("src/penulis/view_penulis.php");
		}

		if ($page == "tambah_penulis") {
			include_once("src/penulis/form_tambah_penulis.php");
		}

		if ($page == "kategori") {
			include_once("src/kategori/view_kategori.php");
		}

		if ($page == "tambah_kategori") {
			include_once("src/kategori/form_tambah_kategori.php");
		}

	} else {
		include_once("src/buku/view_buku.php");
	}
?>

</body>
</html>