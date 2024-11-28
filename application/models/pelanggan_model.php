<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_pelanggan() {
        // Ambil semua data pelanggan dari tabel
        return $this->db->get('pelanggan')->result();
    }
}
