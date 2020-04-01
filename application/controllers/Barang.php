<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data = [];
        $data['barang'] = $this->M_barang->getAllbarang();
        $data['judul'] = "Daftar Barang";
        $this->load->view('templates/header',$data);
        $this->load->view('v_barang',$data);
        $this->load->view('templates/footer');
    }
    
    public function tambah(){

        // BAHASA UDAH DI GANTI KE INDONESIA HANNYA UNTUK FORMVALIDATION REQUIRED DAN NUMERIC
        $data['judul'] = "Form tambah barang";
        $this->form_validation->set_rules('namabarang','Nama barang','required');
        $this->form_validation->set_rules('keterangan','Keterangan','required');
        $this->form_validation->set_rules('harga','Harga','required|numeric');

        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/header',$data);
            $this->load->view('v_tambahbarang');
            $this->load->view('templates/footer');
        } else {
           
            $this->M_barang->tambahDataBarang();
            $this->session->set_flashdata('flash','ditambahkan');
            redirect('barang');
        }
        
    }

    public function hapus($id_barang) {
        $this->M_barang->hapusDataBarang($id_barang);
        $this->session->set_flashdata('flash','dihapus');
        redirect('barang');
    }

    public function detail($id_barang){
        $data['judul'] = 'Detail barang';
        $data['barang'] = $this->M_barang->getBarangById($id_barang);
        $this->load->view('templates/header',$data);
        $this->load->view('v_detailbarang',$data);
        $this->load->view('templates/footer');
    }
}
