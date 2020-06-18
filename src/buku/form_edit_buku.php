<?php
$bukuid = $_GET['bukuid'];

?>
    <!--Navigation-->
    <?php include_once(APP_ROOT.'/src/templates/nav_buku.html'); ?>

    <!--Container-->
    <div class="container shadow-lg mx-auto bg-white mt-24 md:mt-16 h-screen">

        <div class="max-w-screen-md mx-auto">

            <form name="edit_judul" action="proses-edit.php" method="POST">

                <fieldset>
                    <p>
                        <label for="judul">Judul buku: </label>

                        <?php                            
                            $books = fetch_decode($url_book_single."?id=".$bukuid);

                            echo "
                            <input type='text' name='judul' placeholder='nama lengkap' value='$books->judul' />
                            ".PHP_EOL;
                        ?>                        
                    </p>

                    <label for="kategori">Pilih Kategori:</label>
                    <select name="kategori">
                        <?php
                            $kategoris = fetch_decode($url_getkategori);

                            foreach ($kategoris as $data) {
                                echo "<option value='$data->id'>$data->nama</option>".PHP_EOL;
                            }                            
                        ?>
                        
                    </select>

                    <label for="writer_id">Pilih Penulis:</label>
                    <select name="writer_id">
                        <<?php
                            $list_penulis = fetch_decode($url_getpenulis);

                            foreach ($list_penulis as $data) {
                                echo "<option value='$data->id'>$data->nama</option>".PHP_EOL;
                            }                            
                        ?>
                    </select>

                    <p>
                        <input type="submit" value="Edit" name="edit" />
                    </p>

                </fieldset>


            </form>        
        </div>

    </div>

<?php
    if(isset($_POST['edit'])){
    
        $post = [
            'id' => $_POST['id'],
            'judul' =>  $_POST['judul'],
            'categ_id'   => $_POST['categ_id'],
            'writer_id'   => $_POST['writer_id']
        ];

        $res = post_decode($url_book_update, $post);
        var_dump($res);
    
    } else {
        die("Akses dilarang...");
    }
?>