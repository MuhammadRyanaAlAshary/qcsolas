<?php
defined('BASEPATH') or exit('No direct script access allowed');

class superuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->model('menu_model', 'menu');
        is_logged_in();
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('superuser/role', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function roleAdd()
    {
        $this->form_validation->set_rules('role', 'Role', 'required');

        $this->menu->roleAdd();
        $this->session->set_flashdata('flash', 'Data Role Berhasil Di Tambahkan');
        redirect('superuser/role');    
    }

    public function roleDeleted($id)
    {
        $this->menu->deleteRoleByID($id);
        $this->session->set_flashdata('flash', 'Data Role Berhasil Di Hapus');
        redirect('superuser/role');    
    }

    public function roleaccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('superuser/roleaccess', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }    

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('flash', 'Change Access');
    }

    public function usersManagement()
    {
        $data['title'] = 'Users Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $query = "SELECT name, email, role, date_created, user.id 
                    FROM user
                    JOIN user_role 
                    ON user.role_id = user_role.id;";

        $data['data_user'] = $this->db->query($query)->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('superuser/users-management', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/query1');
    }

    public function addUser()
    {
        $data['title'] = 'Add Users';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [

            'valid_email' => 'Cek format email',
            'is_unique' => 'Email Sudah ada'

        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [

            'matches' => 'Password dont match!',
            'min_length' => 'Password too short'

        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('superuser/add-user');
            $this->load->view('templates/footer');
            $this->load->view('templates/query1');
        } else {

            $data = [

                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'is_active' => 1,
                'date_created' => date("Y-m-d")
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('flash', 'Data User Berhasil Ditambahkan');
            redirect('superuser/usersmanagement');
        }
    }

    public function deleteUser($id)
    {
        $this->menu->deleteUserByID($id);
        $this->session->set_flashdata('flash', 'Data User Berhasil Di Hapus');
        redirect('superuser/usersmanagement');    
    }
}
