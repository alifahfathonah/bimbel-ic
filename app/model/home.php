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

        public function getTestimoni() {
            $this->db->query = "SELECT * FROM testimoni ORDER BY id_testimoni DESC LIMIT 9";
            return $this->db->query();
        }
        public function getVideo() {
            $this->db->query = "SELECT * FROM video ORDER BY tanggal DESC LIMIT 3";
            return $this->db->query();
        }
        public function getSosmed() {
            $this->db->query = "SELECT * FROM `sosmed`";
            return $this->db->query();
        }
    }
    