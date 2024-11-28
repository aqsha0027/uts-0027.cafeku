<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Load model
        $this->load->model('Pelanggan_model');
        // Pastikan pengguna sudah login
        if (!$this->session->userdata('logged_in')) {
            redirect('login'); // Ganti dengan URL login Anda
        }
    }

    public function index() {
        $data['pelanggan'] = $this->Pelanggan_model->get_all_pelanggan();
        $this->load->view('admin/data_pelanggan', $data);
    }
}
