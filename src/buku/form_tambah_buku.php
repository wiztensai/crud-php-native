<!--Navigation-->
<?php include_once('./src/templates/nav_buku.html'); ?>

<!--Container-->
<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-16 h-screen">

    <div class="max-w-screen-md mx-auto">
        <div class="py-4 text-2xl font-semibold">Tambah Buku</div>

        <form name="edit_judul" action="src/buku/proses_tambah_buku.php" method="POST">

            <fieldset>
                <p class="mb-4">
                    <label for="judul">Judul buku: </label>
                    <input type='text' class='border rounded p-1' name='judul' placeholder='judul buku' value='' />
                </p>

                <p class="mb-4">
                    <label for="categ_id">Pilih Kategori:</label>
                    <select name="categ_id" class='border rounded p-1'>
                        <?php
                            $kategoris = fetch_decode($url_getkategori);

                            foreach ($kategoris as $data) {
                                echo "<option                                 
                                value='$data->id'>$data->nama</option>".PHP_EOL;
                            }                            
                        ?>

                    </select>
                </p>

                <label for="writer_id">Pilih Penulis:</label>
                <select name="writer_id" class='border rounded p-1'>
                    <<?php
                            $list_penulis = fetch_decode($url_getpenulis);

                            foreach ($list_penulis as $data) {
                                echo "<option value='$data->id'>$data->nama</option>".PHP_EOL;
                            }                            
                        ?> </select>

                        <p>

                            <a href="javascript:history.go(-1)"
                                class="my-4 bg-gray-500 hover:bg-gray-600 text-white font-bold mr-4 py-2 px-4 rounded">Cancel</a>

                            <input type="submit" value="Tambah Buku" name="tambah"
                                class="my-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" />
                        </p>

            </fieldset>


        </form>
    </div>

</div>