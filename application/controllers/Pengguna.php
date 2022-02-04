<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenggunaModel');
    }
	public function index()
	{
        $data = $this->PenggunaModel->getPengguna();
		$this->load->view('pengguna/index ', ["data" => $data]);
    }

    public function error()
    {
        $this->load->view('pengguna/error');
    }

    public function tambah()
    {
        $this->load->view('pengguna/tambah');
    }

    public function action_tambah()
    {
        if($this->PenggunaModel->simpan()){
            redirect(base_url('index.php/pengguna/tambah'));
        }else{
            redirect(base_url('index.php/pengguna/error/'));
        }
    }
    
    public function edit($id)
    {
        $data = $this->PenggunaModel->getData($id);
        $this->load->view('pengguna/edit', ['data'=>$data]);
    }

    public function action_edit($id)
    {
        if($this->PenggunaModel->edit($id)){
            redirect(base_url('index.php/pengguna/edit/'.$id));
        }else{
            redirect(base_url('index.php/pengguna/error/'));
        }
    }
    public function delete($id)
    {
        if($this->PenggunaModel->delete($id)){
            redirect(base_url('index.php/pengguna/'));
        }
    }
}
