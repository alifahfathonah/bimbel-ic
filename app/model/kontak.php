<?php
    class Kontak extends Database
    {
        function __construct($database) {
            $this->db = new Database($database);
        }

        public function getKontakk() {
            $this->db->query = "SELECT * FROM kontakk ORDER BY id_kontak DESC";
            return $this->db->query();
        }
    }
    