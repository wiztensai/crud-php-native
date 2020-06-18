<!--Navigation-->
<?php include_once('./src/templates/nav_kategori.html'); ?>

<!--Container-->
<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-16 h-screen">

    <div class="max-w-screen-md mx-auto">
        <div class="py-4 text-2xl font-semibold">Tambah Kategori</div>

        <form name="edit_judul" action="src/kategori/proses_tambah_kategori.php" method="POST">

            <fieldset>
                <p class="mb-4">
                    <label for="judul">Nama Kategori: </label>
                    <input type='text' class='border rounded p-1' name='nama' placeholder='nama kategori' value='' />
                </p>

                <p>
                <a href="javascript:history.go(-1)"
                    class="my-4 bg-gray-500 hover:bg-gray-600 text-white font-bold mr-4 py-2 px-4 rounded">Cancel</a>

                <input type="submit" value="Tambah Kategori" name="tambah"
                    class="my-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" />
                </p>

            </fieldset>


        </form>
    </div>

</div>