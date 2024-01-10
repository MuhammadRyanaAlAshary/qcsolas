<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nomer_analisa extends CI_Model
{
    public function index()
    {
        $this->db->select('*');
        $this->db->from('nomer_analisa');
        $this->db->where('is_deleted', null);
        return $this->db->get()->result_array();
    }

    public function store() 
    {
        $data = [
            'nomer_analisa' => $this->input->post('nomer_analisa'),
            'nomer_batch' => $this->input->post('nomer_batch'),
            'exp_date' => $this->input->post('exp_date')
          ];
    
          $this->db->insert('nomer_analisa', $data);
          $this->session->set_flashdata('flash', 'Data Nomer Analisa Berhasil Di Tambahkan');
          redirect('admin/nomer_analisa');
    }

    public function edit($id)
    {
        $query = "SELECT * FROM nomer_analisa WHERE id = '$id'";
        return $this->db->query($query)->row_array();
    }

    public function update($id)
    {
        $data = [
            'nomer_analisa' => htmlspecialchars($this->input->post('nomer_analisa', true)),
            'nomer_batch' => htmlspecialchars($this->input->post('nomer_batch', true)),
            'exp_date' => htmlspecialchars($this->input->post('exp_date', true)),
        ];

        $this->db->where('id', $id);
        $this->db->update('nomer_analisa', $data);

        $this->session->set_flashdata('flash', 'Data Nomer Analisa Berhasil Diupdate!..');
        redirect('admin/nomer_analisa/');
    }

    public function delete($id){
        $data = [
            'is_deleted' => 1,
        ];

        $this->db->where('id', $id);
        $this->db->update('nomer_analisa', $data);

        $this->session->set_flashdata('delete', 'Data Nomer Analisa Berhasil Di Hapus!..');
        redirect('admin/nomer_analisa/');
    }

    public function checkDuplicateNomerAnalisa($id)
    {
        $query = "SELECT * FROM nomer_analisa WHERE nomer_analisa = '$id'";
        return $this->db->query($query)->row_array();
    }
    
    public function checkDuplicateNomerBatch($id)
    {
        $query = "SELECT * FROM nomer_analisa WHERE nomer_batch = '$id'";
        return $this->db->query($query)->row_array();
    }
}