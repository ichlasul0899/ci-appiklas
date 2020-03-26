<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
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
}
