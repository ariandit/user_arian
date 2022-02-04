<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenggunaModel extends CI_Model {
    public function simpan()
    {
        $data = $this->input->post();
        if(!empty($data)){
            return $this->db->insert('pengguna', $data);
        }
    }
    public function edit($id)
    {
        $data = $this->input->post();
        if(!empty($data)){
            return $this->db->update('pengguna', $data, ['id'=>$id]);
        }
    }

    public function getPengguna()
    {
        $pengguna = $this->input->get('username');
        if(!empty($username)){
            return $this->db->get('pengguna')->result_array();
        }else{
            return $this->db->query('SELECT * FROM pengguna WHERE username LIKE ?','%'.$pengguna.'%')->result_array();
        }
    }
    public function getData($id)
    {
        return $this->db->get_where('pengguna',['id'=>$id])->row_array();
    }
    public function delete($id)
    {
        return $this->db->delete('pengguna',['id'=>$id]);  
    }
}
