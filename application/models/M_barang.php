<?php
    class M_barang extends CI_model {
        public function getAllbarang() {
            $query = $this->db->get('barang');
            return $query->result_array();
        }

    }
?>