<?php
    class Home extends Database
    {
        function __construct($database) {
            $this->db = new Database($database);
        }

        public function getSlide() {
            $this->db->query = "SELECT * FROM slide";
            return $this->db->query();
        }
    }
    