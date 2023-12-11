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

        $query = "SELECT user_data_lhu_history.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu, user_data_lhu_history.*, user.name
                    FROM user_data_lhu_history  
                    JOIN tb_pdf_book
                    ON user_data_lhu_history.id_tb_pdf_book = tb_pdf_book.id
                    JOIN produk 
                    ON tb_pdf_book.id_produk = produk.id
                    LEFT JOIN user 
                    ON user_data_lhu_history.users = user.id
                    WHERE user_data_lhu_history.id = $id";
                    
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
                WHERE user_data_lhu_history.id = $id";

        $this->menu->printLhu($id);

        $data['datalhu'] = $this->db->query($query)->row_array();
        redirect('./assets/data/' . $data['datalhu']['file_lhu']);
    }

    public function printLhuBBP($id) {
        $data['title'] = 'Laporan LHU BBP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT user_data_bbp_bba_history.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu, user_data_bbp_bba_history.*, user.name
                    FROM user_data_bbp_bba_history  
                    JOIN tb_pdf_book
                    ON user_data_bbp_bba_history.id_tb_pdf_book = tb_pdf_book.id
                    JOIN produk 
                    ON tb_pdf_book.id_produk = produk.id
                    LEFT JOIN user 
                    ON user_data_bbp_bba_history.users = user.id
                    WHERE user_data_bbp_bba_history.id = $id";
                    
        $this->menu->printLhuBBA_BPP($id);
        
        $data['datalhu'] = $this->db->query($query)->result_array();
        $this->mypdf->generate('user/laporanlhu-bbp', $data, 'laporan-lhu-bbp', 'A4', 'potret');
    }
    
    public function printLhuBBA($id){
        $data['title'] = 'Laporan LHU BBA';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT user_data_bbp_bba_history.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu, user_data_bbp_bba_history.*, user.name
                    FROM user_data_bbp_bba_history
                    JOIN tb_pdf_book
                    ON user_data_bbp_bba_history.id_tb_pdf_book = tb_pdf_book.id
                    JOIN produk 
                    ON tb_pdf_book.id_produk = produk.id
                    LEFT JOIN user 
                    ON user_data_bbp_bba_history.users = user.id
                    WHERE user_data_bbp_bba_history.id = $id";
                    
        $this->menu->printLhuBBA_BPP($id);
        
        $data['datalhu'] = $this->db->query($query)->result_array();
        $this->mypdf->generate('user/laporanlhu-bba', $data, 'laporan-lhu-bba', 'A4', 'potret');
    }

    public function printLhuBKP($id) {
        $data['title'] = 'Laporan LHU BKP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT user_data_bkp_history.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu, user_data_bkp_history.*, user.name
                    FROM user_data_bkp_history
                    JOIN tb_pdf_book
                    ON user_data_bkp_history.id_tb_pdf_book = tb_pdf_book.id
                    JOIN produk 
                    ON tb_pdf_book.id_produk = produk.id
                    LEFT JOIN user 
                    ON user_data_bkp_history.users = user.id
                    WHERE user_data_bkp_history.id = $id";
                    
        $this->menu->printLhuBKP($id);
        
        $data['datalhu'] = $this->db->query($query)->result_array();
        $this->mypdf->generate('user/laporanlhu-bkp', $data, 'laporan-lhu-bba', 'A4', 'potret');
    }
}