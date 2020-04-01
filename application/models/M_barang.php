<?php
    class M_barang extends CI_model {
        public function getAllbarang() {
            $query = $this->db->get('barang');
            return $query->result_array();
        }

        public function tambahDataBarang(){

            // TRUE UNTUK MENGECEK HTMLSPECIALCHAR
            $data = [
                "nama_barang" => $this->input->post("namabarang", true),
                "jenis_barang" => $this->input->post("jenisbarang", true),
                "keterangan" => $this->input->post("keterangan", true),
                "harga" => $this->input->post("harga", true)
            ];

            $this->db->insert('barang', $data);
        }

        public function hapusDataBarang($id_barang){
            $this->db->where('id_barang',$id_barang);
            $this->db->delete('barang');
        }

    }
?>