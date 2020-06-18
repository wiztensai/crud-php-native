<?php
$bukuid = $_GET['bukuid'];

// $books = get_content($url_getbooks);
// $list_penulis = fetch_decode($url_getpenulis);
// $kategoris = fetch_decode($url_getkategori);

?>
    <!--Navigation-->
    <?php include_once(APP_ROOT.'/src/templates/nav_buku.html'); ?>

    <!--Container-->
    <div class="container shadow-lg mx-auto bg-white mt-24 md:mt-16 h-screen">

        <div class="max-w-screen-md mx-auto">

            <form name="edit_judul" action="proses-edit.php" method="POST">

                <fieldset>
                    <p>
                        <label for="nama">Judul buku: </label>
                        <input type="text" name="nama" placeholder="nama lengkap" value="" />
                    </p>

                    <label for="cars">Pilih Kategori:</label>
                    <select name="cars" id="cars">
                        <option value="volvo">Volvo</option>
                    </select>

                    <label for="cars">Pilih Penulis:</label>
                    <select name="cars" id="cars">
                        <option value="volvo">Volvo</option>
                    </select>

                    <p>
                        <input type="submit" value="Simpan" name="simpan" />
                    </p>

                </fieldset>


            </form>
            
            <?php echo $url_getbooks; ?>
        </div>

    </div>