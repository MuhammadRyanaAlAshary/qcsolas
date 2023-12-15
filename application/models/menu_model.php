<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Menu_model extends CI_Model
{
    public function getlhu()
    {
        $this->db->select('*');
        $this->db->select('tb_pdf_book.id as id_tb_pdf_book');
        $this->db->from('tb_pdf_book');
        $this->db->join('produk', 'produk.id = tb_pdf_book.id_produk');
        return $this->db->get()->result_array();
    }

    public function getlhuObatJadi()
    {
        $query = "SELECT user_data_lhu_history.id AS id_user_data, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu_pdf, tb_pdf_book.file_lhu_word, tb_pdf_book.file_lhu_gambar, user_data_lhu_history.*, user.name
                    FROM user_data_lhu_history  
                    JOIN tb_pdf_book
                    ON user_data_lhu_history.id_tb_pdf_book = tb_pdf_book.id
                    JOIN produk 
                    ON tb_pdf_book.id_produk = produk.id
                    LEFT JOIN user 
                    ON user_data_lhu_history.users = user.id
                    WHERE tb_pdf_book.jenis_lhu = 'Obat Jadi' OR tb_pdf_book.jenis_lhu = 'MikroBiologi BB' OR tb_pdf_book.jenis_lhu = 'MikroBiologi OJ' ";

        return $this->db->query($query)->result_array();
    }

    public function getlhuBBP()
    {
        $query = "SELECT user_data_bbp_bba_history.id AS id_user_data, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu_pdf, tb_pdf_book.file_lhu_word, tb_pdf_book.file_lhu_gambar, user_data_bbp_bba_history.*, user.name
                    FROM user_data_bbp_bba_history
                    JOIN tb_pdf_book
                    ON user_data_bbp_bba_history.id_tb_pdf_book = tb_pdf_book.id
                    JOIN produk 
                    ON tb_pdf_book.id_produk = produk.id
                    LEFT JOIN user 
                    ON user_data_bbp_bba_history.users = user.id
                    WHERE tb_pdf_book.jenis_lhu = 'BBP' ";

        return $this->db->query($query)->result_array();
    }

    public function getlhuBBA()
    {
        $query = "SELECT user_data_bbp_bba_history.id AS id_user_data, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu_pdf, tb_pdf_book.file_lhu_word, tb_pdf_book.file_lhu_gambar, user_data_bbp_bba_history.*, user.name
                FROM user_data_bbp_bba_history
                JOIN tb_pdf_book
                ON user_data_bbp_bba_history.id_tb_pdf_book = tb_pdf_book.id
                JOIN produk 
                ON tb_pdf_book.id_produk = produk.id
                LEFT JOIN user 
                ON user_data_bbp_bba_history.users = user.id
                WHERE tb_pdf_book.jenis_lhu = 'BBA' ";

        return $this->db->query($query)->result_array();
    }

    public function getlhuBK()
    {
        $query = "SELECT user_data_bk_history.id AS id_user_data, produk.kode_produk, produk.produk_name, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu_pdf, tb_pdf_book.file_lhu_word, tb_pdf_book.file_lhu_gambar, user_data_bk_history.*, user.name
                    FROM user_data_bk_history
                    JOIN tb_pdf_book
                    ON user_data_bk_history.id_tb_pdf_book = tb_pdf_book.id
                    JOIN produk 
                    ON tb_pdf_book.id_produk = produk.id
                    LEFT JOIN user 
                    ON user_data_bk_history.users = user.id
                    WHERE tb_pdf_book.jenis_lhu = 'BK' ";

        return $this->db->query($query)->result_array();
    }

    public function getSubmenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu` 
            FROM `user_sub_menu` JOIN `user_menu` 
            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`";
        return $this->db->query($query)->result_array();
    }

    public function checkNomorAnalisaObatJadi($id) {
        $query= "SELECT * 
                    FROM user_data_lhu_history 
                    WHERE nomer_analisa = '$id' ";

        return $this->db->query($query)->result_array();
    }

    public function cheeckNomorAnalisaBBP_BBA($id){
        $query= "SELECT * 
                    FROM user_data_bbp_bba_history 
                    WHERE nomer_analisa = '$id' ";

        return $this->db->query($query)->result_array();
    }

    public function checkNomorAnalisaBK($id) {
        $query= "SELECT * 
        FROM user_data_bk_history 
        WHERE nomer_analisa = '$id' ";

        return $this->db->query($query)->result_array();
    }

    public function getlhuId($id)
    {
        $query = "SELECT tb_pdf_book.id AS id_tb_pdf_book, tb_pdf_book.jenis_lhu, tb_pdf_book.file_lhu_pdf, tb_pdf_book.file_lhu_word, tb_pdf_book.file_lhu_gambar, produk.* 
                  FROM tb_pdf_book 
                  JOIN produk 
                  ON produk.id = tb_pdf_book.id_produk
                  WHERE tb_pdf_book.id = $id";

        return $this->db->query($query)->row_array();
    }

    public function checkDuplicateProdakJadi($id)
    {
        $query = "SELECT * FROM produk WHERE kode_produk = '$id' AND produk_type = 'Prodak Jadi'";
        return $this->db->query($query)->row_array();
    }

    public function checkDuplicateBahanBaku($id) {
        $query = "SELECT * FROM produk WHERE kode_produk = '$id' AND produk_type = 'Bahan Baku'";
        return $this->db->query($query)->row_array();
    }

    public function checkDuplicateBahanKemas($id){
        $query = "SELECT * FROM produk WHERE kode_produk = '$id' AND produk_type = 'Bahan Kemas' ";
        return $this->db->query($query)->row_array();
    }

    public function roleAdd()
    {
      $data = [
        'role' => $this->input->post('role'),
      ];

      $this->db->insert('user_role', $data);
      $this->session->set_flashdata('flash', 'Data Role berhasil di tambahkan');
      redirect('superuser/role');
    }

    public function deleteRoleByID($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
    }

    public function hapusDatamenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
    }

    public function hapusSubmenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }

    public function deleteUserByID($id)
    {
        $this->db->delete('user', ['id' => $id]);
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
        $file_lhu_pdf = $_FILES['file_lhu_pdf']['name'];
        $file_lhu_word = $_FILES['file_lhu_word']['name'];
        $file_lhu_gambar = $_FILES['file_lhu_gambar']['name'];

        if (!empty($file_lhu_pdf) && !empty($file_lhu_word) && !empty($file_lhu_gambar)) {
            $config['allowed_types'] = 'docx|pdf|jpg|png|jpeg';
            $config['max_size'] = '10000';
            $config['upload_path'] = './assets/file_lhu/';
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            // Upload the files separately
            if ($this->upload->do_upload('file_lhu_pdf')) {
                $file_lhu_pdf = $this->upload->data('file_name');
            } else {
                // Handle PDF upload failure
                $this->session->set_flashdata('flash', 'File PDF gagal di upload, tipe file salah.');
                redirect('admin/datalhu/');
            }

            if ($this->upload->do_upload('file_lhu_word')) {
                $file_lhu_word = $this->upload->data('file_name');
            } else {
                // Handle Word upload failure
                $this->session->set_flashdata('flash', 'File Word gagal di upload, tipe file salah.');
                redirect('admin/datalhu/');
            }

            if ($this->upload->do_upload('file_lhu_gambar')) {
                $file_lhu_gambar = $this->upload->data('file_name');
            } else {
                // Handle Image upload failure
                $this->session->set_flashdata('flash', 'File Gambar gagal di upload, tipe file salah.');
                redirect('admin/datalhu/');
            }

            $data = [
                'id_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
                'jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true)),
                'file_lhu_pdf' => $file_lhu_pdf,
                'file_lhu_word' => $file_lhu_word, 
                'file_lhu_gambar' => $file_lhu_gambar
            ];

            $this->db->insert('tb_pdf_book', $data);
            $this->session->set_flashdata('flash', 'Data LHU Berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('flash', 'File-file wajib diunggah.');
            redirect('admin/datalhu/');
        }

    }

    public function editLhu($id)
    {
        $data['datalhu'] = $this->db->get_where('tb_pdf_book', ['id' => $id])->row_array();
        // cek jika ada gambar yang di upload
        $upload_pdf = $_FILES['file_lhu_pdf'];
        $upload_word = $_FILES['file_lhu_word'];
        $upload_gambar = $_FILES['file_lhu_gambar'];

        if ($upload_pdf) {
            $config['allowed_types'] = 'docx|pdf|jpg|jpeg|png';
            $config['max_size']      = '10000';
            $config['upload_path'] = './assets/file_lhu/';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            // upload foto baru
            if ($this->upload->do_upload('file_lhu_pdf')) {
                $old_file = $data['datalhu']['file_lhu_pdf'];
                $path = './assets/file_lhu/';

                // hapus foto lama selain foto default
                if ($old_file != 'default.pdf') {
                    unlink(FCPATH . $path . $old_file);
                }
                // ganti foto lama dengan baru
                $new_file = $this->upload->data('file_name');
                $this->db->set('file_lhu_pdf', $new_file);
            } else {

                $data = [
                    'id_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
                    'jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true)),
                ];

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('tb_pdf_book', $data);
                $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!..');

                redirect('admin/datalhu/');
            }
        }

        $data = [
            'id_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
            'jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true)),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pdf_book', $data);
    }


    // public function editlhu($id)
    // {
    //     $data['datalhu'] = $this->db->get_where('tb_pdf_book', ['id' => $id])->row_array();
    //     // cek jika ada gambar yang di upload
    //     $upload_pdf = $_FILES['file_lhu'];

    //     if ($upload_pdf) {
    //         $config['allowed_types'] = 'docx|pdf|jpg|jpeg|png';
    //         // $config['allowed_types'] = 'pdf';
    //         $config['max_size']      = '10000';
    //         $config['upload_path'] = './assets/file_lhu/';
    //         $config['encrypt_name'] = TRUE;

    //         $this->load->library('upload', $config);

    //         // upload foto baru
    //         if ($this->upload->do_upload('file_lhu')) {
    //             $old_file = $data['datalhu']['file_lhu'];
    //             $path = './assets/data/';

    //             // hapus foto lama selain foto default
    //             if ($old_file != 'default.pdf') {
    //                 unlink(FCPATH . $path . $old_file);
    //             }
    //             // ganti foto lama dengan baru
    //             $new_file = $this->upload->data('file_name');
    //             $this->db->set('file_lhu', $new_file);
    //         } else {

    //             $data = [
    //                 'id_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
    //                 'jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true)),
    //             ];

    //             $this->db->where('id', $this->input->post('id'));
    //             $this->db->update('tb_pdf_book', $data);
    //             $this->session->set_flashdata('flash', 'Data LHU Berhasil Diupdate!..');

    //             redirect('admin/datalhu/');
    //         }
    //     }

    //     $data = [
    //         'id_produk' => htmlspecialchars($this->input->post('kode_produk', true)),
    //         'jenis_lhu' => htmlspecialchars($this->input->post('jenis_lhu', true)),
    //     ];

    //     $this->db->where('id', $this->input->post('id'));
    //     $this->db->update('tb_pdf_book', $data);
    // }

    public function tambahLhuUser()
    {
        // cek jika ada gambar yang di upload
        $data = [
            'nomer_analisa' => htmlspecialchars($this->input->post('nomer_analisa', true)),
            'nomer_batch' => htmlspecialchars($this->input->post('nomer_batch', true)),
            'exp_date' => date('Y-m-d', strtotime($this->input->post('exp_date'))),
            'tgl_produksi' => date('Y-m-d', strtotime($this->input->post('tgl_produksi'))),
            'tgl_sampling' => date('Y-m-d', strtotime($this->input->post('tgl_sampling'))),
            'besaran_batch' => htmlspecialchars($this->input->post('besaran_batch', true)),
            'satuan' => htmlspecialchars($this->input->post('satuan', true)),
            'id_tb_pdf_book' => $this->input->post('id_tb_pdf_book'),
            'is_active' => 1,
        ];

        $this->db->insert('user_data_lhu_history', $data);
    }

    public function add_lhu_bbp_bba()
    {
        // cek jika ada gambar yang di upload
        $data = [
            'nomer_analisa' => htmlspecialchars($this->input->post('nomer_analisa', true)),
            'nomer_batch' => htmlspecialchars($this->input->post('nomer_batch', true)),
            'tgl_sampling' => date('Y-m-d', strtotime($this->input->post('tgl_sampling'))),            
            'exp_date' => date('Y-m-d', strtotime($this->input->post('exp_date'))),
            'produsen' => htmlspecialchars($this->input->post('produsen', true)),
            'supplier' => htmlspecialchars($this->input->post('supplier', true)),
            'jumlah_penerimaan' => htmlspecialchars($this->input->post('jumlah_penerimaan', true)),
            'no_protap_analisa_bb' => htmlspecialchars($this->input->post('no_protap_analisa_bb', true)),
            'tgl_berlaku' => date('Y-m-d', strtotime($this->input->post('tgl_berlaku'))),
            'id_tb_pdf_book' => $this->input->post('id_tb_pdf_book'),
        ];

        $this->db->insert('user_data_bbp_bba_history', $data);
    }

    public function add_data_bk_history()
    {
        // cek jika ada gambar yang di upload
        $data = [
            'nomer_analisa' => htmlspecialchars($this->input->post('nomer_analisa', true)),
            'nomer_batch' => htmlspecialchars($this->input->post('nomer_batch', true)),
            'exp_date' => date('Y-m-d', strtotime($this->input->post('exp_date'))),
            'tgl_kedatangan' => htmlspecialchars($this->input->post('tanggal_kedatangan', true)),
            'nama_produsen' => htmlspecialchars($this->input->post('nama_produsen', true)),
            'nama_supplier' => htmlspecialchars($this->input->post('nama_supplier', true)),
            'jumlah_bahan' => htmlspecialchars($this->input->post('jumlah_bahan', true)),
            'id_tb_pdf_book' => $this->input->post('id_tb_pdf_book'),
        ];

        $this->db->insert('user_data_bk_history', $data);
    }

    public function printCover($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = [
            'users' => $data['user']['id'],
            'active_print_cover' => 1,
            'print_date' => date("Y-m-d")  
        ];
        
        $this->db->where('user_data_lhu_history.id', $id);
        $this->db->update('user_data_lhu_history', $data);
    }

    public function printLhuPDF($id)
    {               
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = [
            'users' => $data['user']['id'],
            'active_print_lhu_pdf' => 1,
            'print_date' => date("Y-m-d")
        ];

        $this->db->where('user_data_lhu_history.id', $id);
        $this->db->update('user_data_lhu_history', $data);
    }

    public function printLhuWORD($id)
    {               
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = [
            'users' => $data['user']['id'],
            'active_print_lhu_word' => 1,
            'print_date' => date("Y-m-d")
        ];

        $this->db->where('user_data_lhu_history.id', $id);
        $this->db->update('user_data_lhu_history', $data);
    }

    public function printLhuGambar($id)
    {               
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = [
            'users' => $data['user']['id'],
            'active_print_lhu_gambar' => 1,
            'print_date' => date("Y-m-d")
        ];

        $this->db->where('user_data_lhu_history.id', $id);
        $this->db->update('user_data_lhu_history', $data);
    }

    public function printLhuBBA_BPP($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = [
            'users' => $data['user']['id'],
            'print_lhu' => 1,
            'print_date' => date("Y-m-d")  
        ];
        
        $this->db->where('user_data_bbp_bba_history.id', $id);
        $this->db->update('user_data_bbp_bba_history', $data);
    }

    public function printLhuBKP($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data = [
            'users' => $data['user']['id'],
            'print_lhu' => 1,
            'print_date' => date("Y-m-d")  
        ];
        
        $this->db->where('user_data_bk_history.id', $id);
        $this->db->update('user_data_bk_history', $data);
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
        $query = ("SELECT * FROM produk WHERE keterangan='REG'");

        return $this->db->query($query)->num_rows();
    }
    function salesnonreg()
    {
        $query = ("SELECT * FROM produk WHERE keterangan='NON.REG'");

        return $this->db->query($query)->num_rows();
    }
    function saless()
    {
        $query = ("SELECT * FROM produk WHERE keterangan='3S'");

        return $this->db->query($query)->num_rows();
    }
    function salesexport()
    {
        $query = ("SELECT * FROM produk WHERE keterangan='Export'");

        return $this->db->query($query)->num_rows();
    }

    function salesnosales()
    {
        $query = ("SELECT * FROM produk WHERE keterangan=''");

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
