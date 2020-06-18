<?php
    class Buku{

        // Connection
        private $conn;

        // Table
        private $db_table_buku = "buku";
        private $db_table_kategori = "kategori";
        private $db_table_penulis = "penulis";

        // Columns
        public $id;
        public $judul;
        public $categ_id;
        public $writer_id;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getBooks(){
            $sqlQuery = "SELECT * FROM " . $this->db_table_buku . "";
            if ($result = mysqli_query($this->conn, $sqlQuery)) {
                return $result;
            } else return null;
        }
                
        // READ single
        public function getSingleBook(){
            $sqlQuery = "SELECT * FROM $this->db_table_buku WHERE id = $this->id".PHP_EOL;
        
            if ($result = mysqli_query($this->conn, $sqlQuery)) {
                $res = mysqli_fetch_object($result);
                return $res;
            } else {
                return null;
            }
        }

        // UPDATE
        public function updateEmployee(){
            // buat query update
            $sql = "UPDATE $this->db_table_buku SET judul='$nama', categ_id='$categ_id', writer_id='$writer_id' WHERE id=$id".PHP_EOL;
            $query = mysqli_query($db, $sql);
        
            // apakah query update berhasil?
            if( $query ) {
                // kalau berhasil alihkan ke halaman list-siswa.php
                // header('Location: list-siswa.php');
                return true;
            } else {
                // kalau gagal tampilkan pesan
                // die("Gagal menyimpan perubahan...");
                return false;
            }
        }
    }

?>