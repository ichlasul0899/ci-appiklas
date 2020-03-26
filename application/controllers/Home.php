<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($nama = 'Good People')
	{
        $data = [];
        $data['nama'] = $nama;
        $data['judul'] = "Halaman Home";
        $this->load->view('templates/header', $data);
        $this->load->view('v_home', $data);
        $this->load->view('templates/footer');
	}
}
