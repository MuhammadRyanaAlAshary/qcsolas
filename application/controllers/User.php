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
        $data['title'] = 'Data LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuUser();

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
        ON tb_pdf_book.id_produk = produk.id";

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
}
