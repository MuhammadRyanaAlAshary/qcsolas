<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  admin extends CI_Controller
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
        $data['title'] = 'Administrator';
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
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function datalhu()
    {
        $data['title'] = 'Entry LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datalhu', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function tambahlhu()
    {
        $data['title'] = 'Entry LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['produk'] = $this->db->get('produk')->result_array();
        $data['jenislhu'] = $this->db->get('jenis_lhu')->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required');
        $this->form_validation->set_rules('nama_lhu', 'Nama LHU', 'required');
        $this->form_validation->set_rules('jenis_lhu', 'Jenis LHU', 'required');
        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('tgl_produksi', 'Tgl Produksi', 'required');
        $this->form_validation->set_rules('tgl_sampling', 'Tgl Sampling', 'required');
        $this->form_validation->set_rules('besaran_batch', 'Besaran Batch', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahdatalhu', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {

            $this->menu->tambahlhu();
            $this->session->set_flashdata('flash', 'Data LHU Berhasil ditambahkan');
            redirect('admin/datalhu/');
        }
    }


    public function editlhu($id = 0)
    {
        $data['title'] = 'Entry LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuId($id);
        $data['produk'] = $this->db->get('produk')->result_array();
        $data['jenislhu'] = $this->db->get('jenis_lhu')->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('kode_produk', 'Kode Prodak', 'required');
        $this->form_validation->set_rules('nama_lhu', 'Nama LHU', 'required|trim');
        $this->form_validation->set_rules('jenis_lhu', 'Jenis LHU', 'required|trim');
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
            $this->load->view('admin/editlhu', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {

            $this->menu->editlhu($id);
            $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
            redirect('admin/datalhu/');
        }
    }

    public function hapuslhu($id, $file)
    {
        $path = './assets/data/';
        if ($file != 'default.jpg') {
            unlink(FCPATH . $path . $file);
        }

        $id = [
            'id' => $id
        ];

        $this->menu->hapuslhubyid($id);
        $this->session->set_flashdata('flash', 'Data LHU Berhasil Dihapus');
        redirect('admin/datalhu/');
    }
}
