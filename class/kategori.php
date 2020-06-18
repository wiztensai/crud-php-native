<?php
    class Kategori{

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
        public function getKategori(){
            $sqlQuery = "SELECT * FROM " . $this->db_table_kategori . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }        
    }

?>