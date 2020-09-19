<?php
    class SubBimbingan extends Database
    {
        function __construct($database) {
            $this->db = new Database($database);
        }

        public function getSubBimbingan($id) {
            $this->db->query = "SELECT * FROM `subbimbingan` WHERE id_subbimbingan='{$id}'";
            return $this->db->query();
        }
    }
    