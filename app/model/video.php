<?php
    class Video extends Database
    {
        function __construct($database) {
            $this->db = new Database($database);
        }

        public function getVideo() {
            $this->db->query = "SELECT * FROM `video` ORDER BY `id` DESC";
            return $this->db->query();
        }
    }
    