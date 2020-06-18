	<!--Navigation-->
	<?php include_once ("./src/templates/nav_penulis.html");  ?>

	<!--Container-->
	<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-16 h-screen">

	    <div class="max-w-screen-md mx-auto relative ">

            <button class="float-right my-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <a class='' href='?page=tambah_penulis'>Tambah Penulis</a>                
	        </button>

	        <table class="w-full border-collapse border-2 border-gray-500">
	            <thead>
	                <tr>
	                    <th class="border border-gray-400 px-4 py-2 text-gray-800">Judul</th>
	                    <th class="border border-gray-400 px-4 py-2 text-gray-800">Edit</th>
	                </tr>
	            </thead>
	            <tbody>
	                <?php
                    $response_data = fetch_decode($url_getpenulis);
                    
                    // print_r($response_data);

					foreach ($response_data as $data) {
						echo
						"<tr>
                            <td class='border px-4 py-2'>
                                <t class='font-semibold'>Penulis:</t> $data->nama
                                <br/><t class='font-semibold'>Id:</t> $data->id                                
                            </td>					
                            <td class='border px-4 py-2'>
                                <a class='float-right text-red-700' href='src/penulis/proses_hapus_penulis.php?id=$data->id'>Hapus</a>															
							</td>
						</tr>".PHP_EOL;				
					}
					?>
	            </tbody>
	        </table>

	    </div>

	</div>