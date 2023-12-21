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

    public function printlhuObatJadi($id)
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
    
        $this->menu->printLhuObatJadi($id);
        
        $data['datalhu'] = $this->db->query($query)->row_array();
        redirect('./assets/file_lhu/lhu_admin/' . $data['datalhu']['file_lhu']);        
    }

    public function printLhuPDF($id)
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

        $this->menu->printLhuPDF($id);

        $data['datalhu'] = $this->db->query($query)->row_array();
        redirect('./assets/file_lhu/' . $data['datalhu']['file_lhu_pdf']);
    }

    public function printLhuWORD($id)
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

        $this->menu->printLhuWORD($id);

        $data['datalhu'] = $this->db->query($query)->row_array();
        redirect('./assets/file_lhu/' . $data['datalhu']['file_lhu_word']);
    }

    public function printLhuGambar($id)
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

        $this->menu->printLhuGambar($id);

        $data['datalhu'] = $this->db->query($query)->row_array();
        redirect('./assets/file_lhu/' . $data['datalhu']['file_lhu_gambar']);
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

    public function printLhuBK($id) {
        $data['title'] = 'Laporan LHU BKP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT user_data_bk_history.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu, user_data_bk_history.*, user.name
                    FROM user_data_bk_history
                    JOIN tb_pdf_book
                    ON user_data_bk_history.id_tb_pdf_book = tb_pdf_book.id
                    JOIN produk 
                    ON tb_pdf_book.id_produk = produk.id
                    LEFT JOIN user 
                    ON user_data_bk_history.users = user.id
                    WHERE user_data_bk_history.id = $id";
                    
        $this->menu->printLhuBK($id);
        
        $data['datalhu'] = $this->db->query($query)->result_array();
        $this->mypdf->generate('user/laporanlhu-bkp', $data, 'laporan-lhu-bba', 'A4', 'potret');
    }
}