<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->model('menu_model', 'menu');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['oj'] =  $this->menu->totaloj();
        $data['bba'] =  $this->menu->totalbba();
        $data['bbt'] =  $this->menu->totalbbt();
        $data['mbb'] =  $this->menu->totalmbb();
        $data['moj'] =  $this->menu->totalmoj();
        $data['all'] =  $this->menu->totalall();

        $data['reg'] =  $this->menu->salesreg();
        $data['nr'] =  $this->menu->salesnonreg();
        $data['s'] =  $this->menu->saless();
        $data['exp'] =  $this->menu->salesexport();
        $data['ns'] =  $this->menu->salesnosales();
        $data['allobj'] =  $this->menu->totalobatjadi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function myprofile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/myprofile', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function datalhuuser()
    {
        $data['title'] = 'Obat Jadi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuObatJadi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/datalhuuser', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function tambahlhu()
    {
        $data['title'] = 'Data LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pdf_book.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu
                  FROM tb_pdf_book
                  JOIN produk
                  ON tb_pdf_book.id_produk = produk.id
                  WHERE tb_pdf_book.jenis_lhu = 'Obat Jadi' ";

        $data['dataLhu'] = $this->db->query($query)->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('tgl_produksi', 'Tgl Produksi', 'required');
        $this->form_validation->set_rules('tgl_sampling', 'Tgl Sampling', 'required');
        $this->form_validation->set_rules('besaran_batch', 'Besaran Batch', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/tambahdatalhu', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $this->menu->tambahLhuUser();
            $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
            redirect('user/datalhuuser/');
        }
    }

    public function bbp()
    {
        $data['title'] = 'BBP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuBBP();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/bbp', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function addBBP()
    {
        $data['title'] = 'Data BBP LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pdf_book.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu
                  FROM tb_pdf_book
                  JOIN produk
                  ON tb_pdf_book.id_produk = produk.id
                  WHERE tb_pdf_book.jenis_lhu = 'BBP' ";

        $data['dataLhu'] = $this->db->query($query)->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('produsen', 'Produsen', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('jumlah_penerimaan', 'Jumlah Penerimaan', 'required');
        $this->form_validation->set_rules('no_protap_analisa_bb', 'No Protap Analisa BB', 'required');
        $this->form_validation->set_rules('tgl_berlaku', 'Tanggal Berlaku', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add-bbp', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $this->menu->add_lhu_bbp_bbk();
            $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
            redirect('user/datalhuuser/');
        }
    } 

    public function bbk()
    {
        $data['title'] = 'BBK';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuBBK();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/bbk', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function addBBK()
    {
        $data['title'] = 'Data BBK LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pdf_book.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu
                  FROM tb_pdf_book
                  JOIN produk
                  ON tb_pdf_book.id_produk = produk.id
                  WHERE tb_pdf_book.jenis_lhu = 'BBK' ";

        $data['dataLhu'] = $this->db->query($query)->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('produsen', 'Produsen', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('jumlah_penerimaan', 'Jumlah Penerimaan', 'required');
        $this->form_validation->set_rules('no_protap_analisa_bb', 'No Protap Analisa BB', 'required');
        $this->form_validation->set_rules('tgl_berlaku', 'Tanggal Berlaku', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add-bbk', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $this->menu->add_lhu_bbp_bbk();
            $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
            redirect('user/datalhuuser/');
        }
    } 

    public function bkp()
    {
        $data['title'] = 'BKP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuBKP();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/bkp', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function addBKP()
    {
        $data['title'] = 'Data BKP LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pdf_book.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu
                  FROM tb_pdf_book
                  JOIN produk
                  ON tb_pdf_book.id_produk = produk.id
                  WHERE tb_pdf_book.jenis_lhu = 'BKP' ";

        $data['dataLhu'] = $this->db->query($query)->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('tgl_produksi', 'Tgl Produksi', 'required');
        $this->form_validation->set_rules('tgl_sampling', 'Tgl Sampling', 'required');
        $this->form_validation->set_rules('besaran_batch', 'Besaran Batch', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add-bbp', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $this->menu->add_data_bkp_history();
            $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
            redirect('user/datalhuuser/');
        }
    } 
}
