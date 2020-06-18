<!DOCTYPE html>
<html lang="en">
	
<?php
	define("APP_ROOT", dirname(__FILE__));
	
	include_once (APP_ROOT.'/config/constant.php');
	include_once (APP_ROOT.'/utils/http.php');

	include_once (APP_ROOT.'/src/templates/header.php');
?>

<body class="bg-gray-400 font-sans leading-normal tracking-normal">

<?php
	// routing single app
	if(isset($_GET['page'])) {
		
		$page = $_GET['page']; 

		if ($page == "edit_buku") {
			include_once("src/buku/form_edit_buku.php");
		}


	} else {
		include_once("src/buku/view_buku.php");
	}
?>

</body>
</html>