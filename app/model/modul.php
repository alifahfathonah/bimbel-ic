<?php
    class Modul extends Database
    {
        function __construct($database) {
            $this->db = new Database($database);
        }

        public function getModul($id) {
            $this->db->query = "SELECT * FROM modul WHERE id_modul='{$id}'";
            return $this->db->query();
        }
    }
    