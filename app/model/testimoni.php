<?php
    class Testimoni extends Database
    {
        function __construct($database) {
            $this->db = new Database($database);
        }

        public function getTestimoni() {
            $this->db->query = "SELECT * FROM testimoni ORDER BY id_testimoni DESC";
            return $this->db->query();
        }
    }
    