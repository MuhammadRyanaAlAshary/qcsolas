<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model', 'menu');
        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {

        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {

            $this->db->insert('user_menu', ['menu' => htmlspecialchars($this->input->post('menu', true))]);
            $this->session->set_flashdata('flash', 'Data Menu Berhasil Ditambahkan');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        //$data['submenu'] = $this->db->get('user_sub_menu')->result_array();
        $data['submenu'] = $this->menu->getSubmenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {

            $data = [
                'title' => htmlspecialchars($this->input->post('title', true)),
                'menu_id' => htmlspecialchars($this->input->post('menu_id', true)),
                'url' => htmlspecialchars($this->input->post('url', true)),
                'icon' => htmlspecialchars($this->input->post('icon', true)),
                'is_active' => htmlspecialchars($this->input->post('is_active', true)),
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('flash', 'Data Submenu Berhasil Ditambahkan');
            redirect('menu/submenu');
        }
    }
    public function hapus($id)
    {
        $this->menu->hapusDatamenu($id);
        $this->session->set_flashdata('flash', 'Data Menu Berhasil Dihapus');
        redirect('menu');
    }

    public function hapusSubmenu($id)
    {
        $this->menu->hapusSubmenu($id);
        $this->session->set_flashdata('flash', 'Data Submenu Berhasil Dihapus');
        redirect('menu/submenu');
    }
}
