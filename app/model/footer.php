<?php
    class Footer extends Database
    {
        function __construct($database) {
            $this->db = new Database($database);
        }

        public function getLinkterkait() {
            $this->db->query = "SELECT * FROM `linkterkait` ORDER BY nama ASC";
            return $this->db->query();
        }
        public function getHubungiKami() {
            $this->db->query = "SELECT * FROM `hubungikami`";
            return $this->db->query();
        }
    }
    