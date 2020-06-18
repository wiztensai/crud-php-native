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
            // $sqlQuery = "SELECT * FROM " . $this->db_table_buku . "";
            $sqlQuery = "SELECT a.*, b.nama as writer_name, c.nama as category FROM $this->db_table_buku as a
            LEFT JOIN $this->db_table_penulis as b            
            ON a.writer_id = b.id 
            LEFT JOIN $this->db_table_kategori as c
            ON a.categ_id = c.id
            ORDER BY a.id DESC
            ".PHP_EOL;

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
        public function updateBuku(){
            $sql = "UPDATE $this->db_table_buku SET judul='$this->judul', categ_id='$this->categ_id', writer_id='$this->writer_id' WHERE id=$this->id".PHP_EOL;
            $query = mysqli_query($this->conn, $sql);

            if( $query ) {                
                return true;
            } else {                
                return false;
            }
        }

        // DELETE
        public function hapusBuku(){
            $sql = "DELETE FROM $this->db_table_buku WHERE id=$this->id".PHP_EOL;
            $query = mysqli_query($this->conn, $sql);

            if( $query ) {                
                return true;
            } else {                
                return false;
            }
        }

        // CREATE
        public function tambahBuku(){
            $sql = "INSERT INTO $this->db_table_buku (judul, categ_id, writer_id)
            VALUES ('$this->judul', '$this->categ_id', '$this->writer_id')".PHP_EOL;

            if (mysqli_query($this->conn, $sql) == TRUE) {
                return true;
            } else {
                return false;
            }
        }
    }

?>