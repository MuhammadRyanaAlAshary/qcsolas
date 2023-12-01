<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('menu_model', 'menu');
        $this->load->library('mypdf');
    }

    public function index($id)
    {
        $data['title'] = 'LAPORAN HASIL UJI';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->db->get_where('tb_pdf_book', ['id' => $id])->result_array($id);
        $this->mypdf->generate('user/laporanlhu', $data, 'laporan-lhu', 'A4', 'potret');
    }
}
  
  /* End of file Laporan.php */
  /* Location: ./application/controllers/Laporan.php */
