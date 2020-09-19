<?php
    class Navigation extends Database
    {
        function __construct($database) {
            $this->db = new Database($database);
        }

        public function getProgram() {
            $this->db->query = "SELECT * FROM program ORDER BY program_name ASC";
            return $this->db->query();
        }
        public function getSubBimbingan($key,$value) {
            $this->db->query = "SELECT id_subbimbingan,title,seo,program_id FROM subbimbingan WHERE {$key}='{$value}' ORDER BY title ASC";
            return $this->db->query();
        }
    }
    