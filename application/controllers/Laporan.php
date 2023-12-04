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

        $query = "SELECT * 
                FROM tb_pdf_book
                JOIN user_data_lhu_history
                ON user_data_lhu_history.id_tb_pdf_book = tb_pdf_book.id
                JOIN produk 
                ON produk.id = user_data_lhu_history.id_tb_pdf_book";

        $this->menu->printCover($id);
        
        $data['datalhu'] = $this->db->query($query)->result_array();
        $this->mypdf->generate('user/laporanlhu', $data, 'laporan-lhu', 'A4', 'potret');
    }

    public function printLhu($id)
    { 
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT * 
                FROM tb_pdf_book
                JOIN user_data_lhu_history
                ON user_data_lhu_history.id_tb_pdf_book = tb_pdf_book.id
                JOIN produk 
                ON produk.id = user_data_lhu_history.id_tb_pdf_book
                WHERE tb_pdf_book.file_lhu = '$id' ";

        $this->menu->printLhu($id);

        $data['datalhu'] = $this->db->query($query)->result_array();
        redirect('./assets/data/' . $id);
    }
}
  
  /* End of file Laporan.php */
  /* Location: ./application/controllers/Laporan.php */
