<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  item extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('menu_model', 'menu');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Jenis LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['jenis'] = $this->menu->getjenisLHU();

        $this->form_validation->set_rules('jenis_lhu', 'Jenis LHU', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('item/index', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {

            $this->db->insert('jenis_lhu', ['jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true))]);
            $this->session->set_flashdata('flash', ' Data Jenis LHU Berhasil Ditambahkan');
            redirect('item');
        }
    }
    public function satuan()
    {
        $data['title'] = 'Satuan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['satuan'] = $this->menu->getsatuan();

        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('item/satuan', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {

            $this->db->insert('satuan', ['satuan' => htmlspecialchars($this->input->post('satuan', true))]);
            $this->session->set_flashdata('flash', 'Data Satuan Berhasil Ditambahkan');
            redirect('item/satuan');
        }
    }
    public function hapusjenis($id)
    {
        $this->menu->hapusjenislhu($id);
        $this->session->set_flashdata('flash', 'Data Jenis LHU Berhasil Dihapus');
        redirect('item');
    }

    public function hapussatuan($id)
    {
        $this->menu->hapussatuan($id);
        $this->session->set_flashdata('flash', 'Data Satuan Berhasil Dihapus');
        redirect('item/satuan');
    }

    public function prodak()
    {
        $data['title'] = 'Prodak';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['produk'] = $this->menu->getobatjadi();

        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required');
        $this->form_validation->set_rules('produk_type', 'Produk Type', 'required');
        $this->form_validation->set_rules('sales_type', 'Sales Type', 'required');
        $this->form_validation->set_rules('produk_name', 'Prodak', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('item/prodak', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {

            $data = [
                'kode_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
                'produk_type' => htmlspecialchars($this->input->post('produk_type', true)),
                'sales_type' => htmlspecialchars($this->input->post('sales_type', true)),
                'produk_name' => htmlspecialchars($this->input->post('produk_name', true)),
            ];
            $this->db->insert('produk', $data);
            $this->session->set_flashdata('flash', ' Data Obat Jadi Berhasil Ditambahkan');
            redirect('item/prodak');
        }
    }
    public function hapusobatjadi($id)
    {
        $this->menu->hapusobatjadi($id);
        $this->session->set_flashdata('flash', 'Data Obat Jadi Berhasil Dihapus');
        redirect('item/prodak');
    }
}
