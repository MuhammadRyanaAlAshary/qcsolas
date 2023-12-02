<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Menu_model extends CI_Model
{
    public function getlhu()
    {
        $this->db->select('*');
        $this->db->from('user_data_lhu_history');
        $this->db->join('tb_pdf_book', 'tb_pdf_book.id = user_data_lhu_history.id_tb_pdf_book');
        return $this->db->get()->result_array();
    }

    public function getSubmenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
            FROM `user_sub_menu` JOIN `user_menu` 
            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`";
            
        return $this->db->query($query)->result_array();
    }

    public function getlhuId($id)
    {
        $query = "SELECT tb_pdf_book.*, user_data_lhu_history.* FROM `user_data_lhu_history` 
        INNER JOIN tb_pdf_book ON user_data_lhu_history.id_tb_pdf_book=tb_pdf_book.id WHERE user_data_lhu_history.id_tb_pdf_book = $id";
        return $this->db->query($query)->row_array();
    }

    public function getlhuIdHistory()
    {
        $this->db->select('*');
        $this->db->from('user_data_lhu_history');
        $this->db->join('tb_pdf_book', 'tb_pdf_book.id = user_data_lhu_history.id_tb_pdf_book');
        $this->db->where('is_active', 1);
        return $this->db->get()->result_array();        
    }    

    public function hapusDatamenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
    }

    public function hapusSubmenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }

    public function countlhu()
    {
        return $this->db->get('tb_pdf_book')->num_rows();
    }

    public function getmenuid($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function getjenisLHU()
    {
        return $this->db->get('jenis_lhu')->result_array();
    }

    public function getsatuan()
    {
        return $this->db->get('satuan')->result_array();
    }
    public function hapusjenislhu($id)
    {
        $this->db->delete('jenis_lhu', ['id' => $id]);
    }

    public function hapussatuan($id)
    {
        $this->db->delete('satuan', ['id' => $id]);
    }

    public function tambahLhu()
    {
        $filelhu = $_FILES['file_lhu']['name'];

        if ($filelhu = '') {
        } else {

            $config['allowed_types'] = 'docx|xlsx|pdf';
            $config['max_size']      = '4000';
            $config['upload_path'] = './assets/data/';
            $config['encrypt_name'] = TRUE;
            // $new_name = time() . $_FILES["userfiles"]['name'];
            // $config['file_name'] = $new_name;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_lhu')) {
                $no_file = 'default.pdf';

                $data = [
                    'kode_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
                    'nama_lhu' => htmlspecialchars($this->input->post('nama_lhu', true)),
                    'jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true)),
                    'file_lhu' => $no_file,
                ];

                $this->db->insert('tb_pdf_book', $data);
                $insert_id = $this->db->insert_id();

                $create_data_lhu_users_history = [
                    'nomer_analisa' => "",
                    'nomer_batch' => "",
                    'exp_date' => "",
                    'tgl_produksi' => '',
                    'tgl_sampling' => '',
                    'besaran_batch' => '',
                    'satuan' => '',
                    'id_tb_pdf_book' => $insert_id
                ];

                $this->db->insert('user_data_lhu_history', $create_data_lhu_users_history);

                $this->session->set_flashdata('flash', 'Ditambahkan & file gagal di upload,tipe file salah!.');
                redirect('admin/datalhu/');
            } else {
                $filelhu = $this->upload->data('file_name', true);

                $data = [
                    'kode_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
                    'nama_lhu' => htmlspecialchars($this->input->post('nama_lhu', true)),
                    'jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true)),
                    'file_lhu' => $filelhu,
                ];

                $this->db->insert('tb_pdf_book', $data);
                $insert_id = $this->db->insert_id();

                $create_data_lhu_users_history = [
                    'nomer_analisa' => "",
                    'nomer_batch' => "",
                    'exp_date' => "",
                    'tgl_produksi' => '',
                    'tgl_sampling' => '',
                    'besaran_batch' => '',
                    'satuan' => '',
                    'id_tb_pdf_book' => $insert_id,
                ];

                $this->db->insert('user_data_lhu_history', $create_data_lhu_users_history);
                $this->session->set_flashdata('flash', 'Data LHU Berhasil ditambahkan');
            }
        }
    }

    public function editlhu($id)
    {
        $data['datalhu'] = $this->db->get_where('tb_pdf_book', ['id' => $id])->row_array();

        // cek jika ada gambar yang di upload
        $upload_pdf = $_FILES['file_lhu'];

        if ($upload_pdf) {
            $config['allowed_types'] = 'docx|xlsx|pdf';
            $config['max_size']      = '4000';
            $config['upload_path'] = './assets/data/';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            // upload foto baru
            if ($this->upload->do_upload('file_lhu')) {
                $old_file = $data['datalhu']['file_lhu'];
                $path = './assets/data/';

                // hapus foto lama selain foto default
                if ($old_file != 'default.pdf') {
                    unlink(FCPATH . $path . $old_file);
                }
                // ganti foto lama dengan baru
                $new_file = $this->upload->data('file_name');
                $this->db->set('file_lhu', $new_file);
            } else {

                $data = [
                    'kode_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
                    'nama_lhu' => htmlspecialchars($this->input->post('nama_lhu', true)),
                    'jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true)),
                ];

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('tb_pdf_book', $data);
                $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!..');

                redirect('admin/datalhu/');
            }
        }

        $data = [
            'kode_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
            'nama_lhu' => htmlspecialchars($this->input->post('nama_lhu', true)),
            'jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true)),
            'nomer_analisa' => htmlspecialchars($this->input->post('nomer_analisa', true)),
            'nomer_batch' => htmlspecialchars($this->input->post('nomer_batch', true)),
            'exp_date' => date('Y-m-d', strtotime($this->input->post('exp_date'))),
            'tgl_produksi' => date('Y-m-d', strtotime($this->input->post('tgl_produksi'))),
            'tgl_sampling' => date('Y-m-d', strtotime($this->input->post('tgl_sampling'))),
            'besaran_batch' => htmlspecialchars($this->input->post('besaran_batch', true)),
            'satuan' => htmlspecialchars($this->input->post('satuan', true))
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pdf_book', $data);
    }

    public function editlhuUser($id){
        $data['datalhu'] = $this->db->get_where('user_data_lhu_history', ['id' => $id])->row_array();

        // cek jika ada gambar yang di upload
        $data = [
            'nomer_analisa' => htmlspecialchars($this->input->post('nomer_analisa', true)),
            'nomer_batch' => htmlspecialchars($this->input->post('nomer_batch', true)),
            'exp_date' => date('Y-m-d', strtotime($this->input->post('exp_date'))),
            'tgl_produksi' => date('Y-m-d', strtotime($this->input->post('tgl_produksi'))),
            'tgl_sampling' => date('Y-m-d', strtotime($this->input->post('tgl_sampling'))),
            'besaran_batch' => htmlspecialchars($this->input->post('besaran_batch', true)),
            'satuan' => htmlspecialchars($this->input->post('satuan', true)),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_data_lhu_history', $data);
    }

    public function hapuslhubyid($id)
    {
        $this->db->where($id);
        return $this->db->delete('tb_pdf_book');
    }

    function totaloj()
    {
        $query = ("SELECT * FROM tb_pdf_book WHERE jenis_lhu='Obat Jadi'");

        return $this->db->query($query)->num_rows();
    }

    function totalbba()
    {
        $query = ("SELECT * FROM tb_pdf_book WHERE jenis_lhu='BBA'");

        return $this->db->query($query)->num_rows();
    }

    function totalbbt()
    {
        $query = ("SELECT * FROM tb_pdf_book WHERE jenis_lhu='BBT'");

        return $this->db->query($query)->num_rows();
    }

    function totalmbb()
    {
        $query = ("SELECT * FROM tb_pdf_book WHERE jenis_lhu='Mikro Biologi BB'");

        return $this->db->query($query)->num_rows();
    }
    function totalmoj()
    {
        $query = ("SELECT * FROM tb_pdf_book WHERE jenis_lhu='Mikro Biologi OJ'");

        return $this->db->query($query)->num_rows();
    }

    function totalall()
    {
        $query = ("SELECT * FROM tb_pdf_book");

        return $this->db->query($query)->num_rows();
    }

    public function getobatjadi()
    {
        return $this->db->get('produk')->result_array();
    }

    function salesreg()
    {
        $query = ("SELECT * FROM produk WHERE sales_type='REG'");

        return $this->db->query($query)->num_rows();
    }
    function salesnonreg()
    {
        $query = ("SELECT * FROM produk WHERE sales_type='NON.REG'");

        return $this->db->query($query)->num_rows();
    }
    function saless()
    {
        $query = ("SELECT * FROM produk WHERE sales_type='3S'");

        return $this->db->query($query)->num_rows();
    }
    function salesexport()
    {
        $query = ("SELECT * FROM produk WHERE sales_type='Export'");

        return $this->db->query($query)->num_rows();
    }

    function salesnosales()
    {
        $query = ("SELECT * FROM produk WHERE sales_type=''");

        return $this->db->query($query)->num_rows();
    }
    function totalobatjadi()
    {
        $query = ("SELECT * FROM produk WHERE produk_type='Prodak Jadi'");

        return $this->db->query($query)->num_rows();
    }

    public function hapusobatjadi($id)
    {
        $this->db->delete('produk', ['id' => $id]);
    }
}
