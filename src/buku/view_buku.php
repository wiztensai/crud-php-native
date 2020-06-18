<?php
    $response_data = fetch_decode($url_getbooks);
?>

	<!--Navigation-->
    <?php include_once (APP_ROOT."/src/templates/nav_buku.html");  ?>

    <!--Container-->
    <div class="container shadow-lg mx-auto bg-white mt-24 md:mt-16 h-screen">

        <div class="max-w-screen-md mx-auto">
            <div>
                <a class='text-blue-600' href='form_edit_buku.php?bukuid=$data->id'>Tambah Buku</a>
            </div>

            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Edit</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$response_data = fetch_decode($url_getbooks);
                    $edit_link = "view_buku.php";

					foreach ($response_data as $data) {
						echo
						"<tr>
							<td class='border px-4 py-2'>$data->judul</td>					
							<td class='border px-4 py-2'>
								<a class='text-blue-600' href='?page=edit_buku&bukuid=$data->id'>Edit</a>
								<a class='text-red-700' href='https://www.w3schools.com/'>Hapus</a>
							</td>
						</tr>".PHP_EOL;				
					}
					?>
                </tbody>
            </table>

        </div>

    </div>