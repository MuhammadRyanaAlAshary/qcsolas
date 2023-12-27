<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->model('menu_model', 'menu');
        $this->load->model('nomer_analisa');
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

        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required');
        $this->form_validation->set_rules('jenis_lhu', 'Jenis LHU', 'required');
    

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambahdatalhu', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $this->menu->tambahLhu();
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

        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required');
        $this->form_validation->set_rules('jenis_lhu', 'Jenis LHU', 'required');

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

    public function nomer_analisa()
    {
        $data['title'] = 'Nomer Analisa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->nomer_analisa->index();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/nomer_analisa', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1'); 
    }

    public function tambah_nomer_analisa(){
        $data['title'] = 'Nomer Analisa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tambah_nomer_analisa', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $nomer_analisa = $this->input->post('nomer_analisa');
            $nomer_batch = $this->input->post('nomer_batch');
            // check duplicate nomer analisa
            $checkNomerAnalisa = $this->nomer_analisa->checkDuplicateNomerAnalisa($nomer_analisa);
            $checkNomerBatch = $this->nomer_analisa->checkDuplicateNomerBatch($nomer_batch);
            
            if ($checkNomerAnalisa) {
                $this->session->set_flashdata('existingNomerAnalisa', 'Nomer Analisa Sudah Ada!.');
                redirect('admin/nomer_analisa/');
            }elseif ($checkNomerBatch) {
                $this->session->set_flashdata('existingNomerBatch', 'Nomer Analisa Sudah Ada!.');
                redirect('admin/nomer_analisa/');
            }else {
                $this->nomer_analisa->store();
                $this->session->set_flashdata('flash', 'Data Nomer Analisa Berhasil ditambahkan');
                redirect('admin/datalhu/');
            }
        }
    }

    public function edit_nomer_analisa($id) {
        $data['title'] = 'Nomer Analisa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
        $data['nomer_analisa'] = $this->nomer_analisa->edit($id);
    
        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
    
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_nomer_analisa', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $nomer_analisa = $this->input->post('nomer_analisa');
            $nomer_batch = $this->input->post('nomer_batch');
            
            // Check if the entered values are the same as the existing values
            if ($data['nomer_analisa']['nomer_analisa'] == $nomer_analisa && $data['nomer_analisa']['nomer_batch'] == $nomer_batch) {
                // Update directly if the values are unchanged
                $this->nomer_analisa->update($id);
                redirect('admin/nomer_analisa/');
            } else {
                // Check for duplicates in nomer analisa and nomer batch separately
                $checkNomerAnalisa = $this->nomer_analisa->checkDuplicateNomerAnalisa($nomer_analisa);
                $checkNomerBatch = $this->nomer_analisa->checkDuplicateNomerBatch($nomer_batch);
    
                if ($checkNomerAnalisa) {
                    $this->session->set_flashdata('existingNomerAnalisa', 'Nomer Analisa Sudah Ada!.');
                } elseif ($checkNomerBatch) {
                    $this->session->set_flashdata('existingNomerBatch', 'Nomer Batch Sudah Ada!.');
                } else {
                    // No duplicates found, perform the update
                    $this->nomer_analisa->update($id);
                    $this->session->set_flashdata('flash', 'Data Nomer Analisa Berhasil ditambahkan');
                }
                redirect('admin/nomer_analisa/');
            }
        }
    }
    

    public function delete_nomer_analisa($id) {
        $this->nomer_analisa->delete($id);
    }
}
