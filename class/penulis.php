<?php
    class Penulis{

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
        public function getPenulis(){
            $sqlQuery = "SELECT * FROM " . $this->db_table_penulis . " ORDER BY id DESC";
            if ($result = mysqli_query($this->conn, $sqlQuery)) {
                return $result;
            } else return null;
        }

        // DELETE
        public function hapusPenulis(){
            $sql = "DELETE FROM $this->db_table_penulis WHERE id=$this->id".PHP_EOL;
            $query = mysqli_query($this->conn, $sql);

            if( $query ) {                
                return true;
            } else {                
                return false;
            }
        }

        // CREATE
        public function tambahPenulis(){
            $sql = "INSERT INTO $this->db_table_penulis (nama)
            VALUES ('$this->nama')".PHP_EOL;

            if (mysqli_query($this->conn, $sql) == TRUE) {
                return true;
            } else {
                return false;
            }
        }
    }

?>