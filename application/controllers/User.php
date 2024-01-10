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
        WHERE tb_pdf_book.jenis_lhu = 'Obat Jadi' OR tb_pdf_book.jenis_lhu = 'MikroBiologi BB' OR tb_pdf_book.jenis_lhu = 'MikroBiologi OJ'";

        $data['dataLhu'] = $this->db->query($query)->result_array();
        $data['dataNomerAnalisa'] = $this->db->get('nomer_analisa')->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
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
            $nomer_analisa = $this->input->post('nomer_analisa');
            // check duplicate nomer analisa
             $nomerAnalisaObatJadi = $this->menu->checkNomorAnalisaObatJadi($nomer_analisa);
             $nomerAnalisaBBA_BK = $this->menu->cheeckNomorAnalisaBBP_BBA($nomer_analisa);
             $nomerAnalisaBK = $this->menu->checkNomorAnalisaBK($nomer_analisa);

             if ($nomerAnalisaObatJadi) {
                $this->session->set_flashdata('existingObatJadi', 'Kode Analisa Sudah Ada!.');
                redirect('user/datalhuuser/');
             } elseif ($nomerAnalisaBBA_BK) {
                $this->session->set_flashdata('existingBBA_BK', 'Kode Analisa Sudah Ada!.');
                redirect('user/datalhuuser/');
             } elseif ($nomerAnalisaBK) {
                $this->session->set_flashdata('existingBK', 'Kode Analisa Sudah Ada!.');
                redirect('user/datalhuuser/');
             } else {
                $this->menu->tambahLhuUser();
                $this->session->set_flashdata('flash', 'Kode Analisa Sudah Ada!.');
                redirect('user/datalhuuser/');
             }
        }
    }

    public function editLhuObatJadi($id)
    {
        $data['title'] = 'Edit LHU Obat Jadi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->editLhuObatJadi($id);

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
            $this->load->view('user/edit-obat-jadi', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $this->menu->editLhuUser($id);
            $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
            redirect('user/bbp/'); 
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
        $this->form_validation->set_rules('tgl_sampling', 'Tanggal Sampling', 'required');
        $this->form_validation->set_rules('tgl_berlaku', 'Tanggal Berlaku', 'required');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('produsen', 'Produsen', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('jumlah_penerimaan', 'Jumlah Penerimaan', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add-bbp', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $nomer_analisa = $this->input->post('nomer_analisa');
            // check duplicate nomer analisa
             $nomerAnalisaObatJadi = $this->menu->checkNomorAnalisaObatJadi($nomer_analisa);
             $nomerAnalisaBBA_BK = $this->menu->cheeckNomorAnalisaBBP_BBA($nomer_analisa);
             $nomerAnalisaBK = $this->menu->checkNomorAnalisaBK($nomer_analisa);

             if ($nomerAnalisaObatJadi) {
                $this->session->set_flashdata('existingObatJadi', 'Kode Analisa Sudah Ada!.');
                redirect('user/bbp/');
             } elseif ($nomerAnalisaBBA_BK) {
                $this->session->set_flashdata('existingBBA_BK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bbp/');
             } elseif ($nomerAnalisaBK) {
                $this->session->set_flashdata('existingBK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bbp/');
             } else {
                $this->menu->add_lhu_bbp_bba();
                $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
                redirect('user/bbp/');    
             }
        }
    } 

    public function editLHUBBP($id)
    {
        $data['title'] = 'Edit LHU BBP';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getEditLhuBBP($id);

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('tgl_sampling', 'Tanggal Sampling', 'required');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('produsen', 'Produsen', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('jumlah_penerimaan', 'Jumlah Penerimaan', 'required');
        $this->form_validation->set_rules('tgl_berlaku', 'Tanggal Berlaku', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit-bbp', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $this->menu->editLHUBBP($id);
            $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
            redirect('user/bbp/'); 
        }
    }

    public function editLHUBBA($id)
    {
        $data['title'] = 'Edit LHU BBA';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getEditLhuBBP($id);

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('tgl_sampling', 'Tanggal Sampling', 'required');
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
            $this->load->view('user/edit-bba', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $this->menu->editLHUBBA($id);
            $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
            redirect('user/bba/'); 
        }
    }

    public function bba()
    {
        $data['title'] = 'BBA';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuBBA();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/bba', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function addBBA()
    {
        $data['title'] = 'Data BBA LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pdf_book.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu
                  FROM tb_pdf_book
                  JOIN produk
                  ON tb_pdf_book.id_produk = produk.id
                  WHERE tb_pdf_book.jenis_lhu = 'BBA' ";

        $data['dataLhu'] = $this->db->query($query)->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('tgl_sampling', 'Tanggal Sampling', 'required');
        $this->form_validation->set_rules('tgl_berlaku', 'Tanggal Berlaku', 'required');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('produsen', 'Produsen', 'required');
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('jumlah_penerimaan', 'Jumlah Penerimaan', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add-bba', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $nomer_analisa = $this->input->post('nomer_analisa');
            // check duplicate nomer analisa
             $nomerAnalisaObatJadi = $this->menu->checkNomorAnalisaObatJadi($nomer_analisa);
             $nomerAnalisaBBA_BK = $this->menu->cheeckNomorAnalisaBBP_BBA($nomer_analisa);
             $nomerAnalisaBK = $this->menu->checkNomorAnalisaBK($nomer_analisa);

             if ($nomerAnalisaObatJadi) {
                $this->session->set_flashdata('existingObatJadi', 'Kode Analisa Sudah Ada!.');
                redirect('user/bba/');
             } elseif ($nomerAnalisaBBA_BK) {
                $this->session->set_flashdata('existingBBA_BK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bba/');
             } elseif ($nomerAnalisaBK) {
                $this->session->set_flashdata('existingBK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bba/');
             } else {
                $this->menu->add_lhu_bbp_bba();
                $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
                redirect('user/bba/');    
             }
        }
    } 

    public function bk()
    {
        $data['title'] = 'BK';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuBK();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/bk', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function addBK()
    {
        $data['title'] = 'Data BK LHU';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pdf_book.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu
                  FROM tb_pdf_book
                  JOIN produk
                  ON tb_pdf_book.id_produk = produk.id
                  WHERE tb_pdf_book.jenis_lhu = 'BK' ";

        $data['dataLhu'] = $this->db->query($query)->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('tgl_kedatangan', 'Tanggal Kedatangan', 'required');
        $this->form_validation->set_rules('nama_produsen', 'Nama Produsen', 'required');
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('jumlah_bahan', 'Jumlah Bahan', 'required');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add-bk', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $nomer_analisa = $this->input->post('nomer_analisa');
            // check duplicate nomer analisa
             $nomerAnalisaObatJadi = $this->menu->checkNomorAnalisaObatJadi($nomer_analisa);
             $nomerAnalisaBBA_BK = $this->menu->cheeckNomorAnalisaBBP_BBA($nomer_analisa);
             $nomerAnalisaBK = $this->menu->checkNomorAnalisaBK($nomer_analisa);

             if ($nomerAnalisaObatJadi) {
                $this->session->set_flashdata('existingObatJadi', 'Kode Analisa Sudah Ada!.');
                redirect('user/bk/');
             } elseif ($nomerAnalisaBBA_BK) {
                $this->session->set_flashdata('existingBBA_BK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bk/');
             } elseif ($nomerAnalisaBK) {
                $this->session->set_flashdata('existingBK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bk/');
             } else {
                $this->menu->add_data_bk_history();
                $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
                redirect('user/bk/');    
            }
        }
    } 

    public function editBK($id)
    {
        $data['title'] = 'Edit LHU BK';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getEditBK($id);

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('tanggal_kedatangan', 'Tanggal Kedatangan', 'required');
        $this->form_validation->set_rules('nama_produsen', 'Nama Produsen', 'required');
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('jumlah_bahan', 'Jumlah Bahan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit-bk', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $this->menu->editLHUBK($id);
            $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
            redirect('user/bk/'); 
        }
    }

    public function mikrobiologiBB()
    {
        $data['title'] = 'MikroBiologi BB';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuBK();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/mikrobiologi-bb', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function addMikroBiologiBB()
    {
        $data['title'] = 'MikroBiologi BB';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pdf_book.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu
                  FROM tb_pdf_book
                  JOIN produk
                  ON tb_pdf_book.id_produk = produk.id
                  WHERE tb_pdf_book.jenis_lhu = 'BK' ";

        $data['dataLhu'] = $this->db->query($query)->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('tanggal_kedatangan', 'Tanggal Kedatangan', 'required');
        $this->form_validation->set_rules('nama_produsen', 'Nama Produsen', 'required');
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('jumlah_bahan', 'Jumlah Bahan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add-mikrobiologi-bb', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $nomer_analisa = $this->input->post('nomer_analisa');
            // check duplicate nomer analisa
             $nomerAnalisaObatJadi = $this->menu->checkNomorAnalisaObatJadi($nomer_analisa);
             $nomerAnalisaBBA_BK = $this->menu->cheeckNomorAnalisaBBP_BBA($nomer_analisa);
             $nomerAnalisaBK = $this->menu->checkNomorAnalisaBK($nomer_analisa);

             if ($nomerAnalisaObatJadi) {
                $this->session->set_flashdata('existingObatJadi', 'Kode Analisa Sudah Ada!.');
                redirect('user/bk/');
             } elseif ($nomerAnalisaBBA_BK) {
                $this->session->set_flashdata('existingBBA_BK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bk/');
             } elseif ($nomerAnalisaBK) {
                $this->session->set_flashdata('existingBK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bk/');
             } else {
                $this->menu->add_data_bk_history();
                $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
                redirect('user/bk/');    
             }
        }
    } 

    public function mikrobiologiOJ()
    {
        $data['title'] = 'MikroBiologi OJ';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['datalhu'] = $this->menu->getlhuBK();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/mikrobiologi-oj', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function addMikroBiologiOJ()
    {
        $data['title'] = 'MikroBiologi OJ';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT tb_pdf_book.id, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu
                  FROM tb_pdf_book
                  JOIN produk
                  ON tb_pdf_book.id_produk = produk.id
                  WHERE tb_pdf_book.jenis_lhu = 'BK' ";

        $data['dataLhu'] = $this->db->query($query)->result_array();
        $data['satuan'] = $this->db->get('satuan')->result_array();

        $this->form_validation->set_rules('nomer_analisa', 'Nomer Analisa', 'required|trim');
        $this->form_validation->set_rules('nomer_batch', 'Nomer Batch', 'required|trim');
        $this->form_validation->set_rules('exp_date', 'Exp Date', 'required');
        $this->form_validation->set_rules('tanggal_kedatangan', 'Tanggal Kedatangan', 'required');
        $this->form_validation->set_rules('nama_produsen', 'Nama Produsen', 'required');
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('jumlah_bahan', 'Jumlah Bahan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/add-mikrobiologi-oj', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {
            $nomer_analisa = $this->input->post('nomer_analisa');
            // check duplicate nomer analisa
             $nomerAnalisaObatJadi = $this->menu->checkNomorAnalisaObatJadi($nomer_analisa);
             $nomerAnalisaBBA_BK = $this->menu->cheeckNomorAnalisaBBP_BBA($nomer_analisa);
             $nomerAnalisaBK = $this->menu->checkNomorAnalisaBK($nomer_analisa);

             if ($nomerAnalisaObatJadi) {
                $this->session->set_flashdata('existingObatJadi', 'Kode Analisa Sudah Ada!.');
                redirect('user/bk/');
             } elseif ($nomerAnalisaBBA_BK) {
                $this->session->set_flashdata('existingBBA_BK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bk/');
             } elseif ($nomerAnalisaBK) {
                $this->session->set_flashdata('existingBK', 'Kode Analisa Sudah Ada!.');
                redirect('user/bk/');
             } else {
                $this->menu->add_data_bk_history();
                $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!.');
                redirect('user/bk/');    
             }
        }
    } 
}
