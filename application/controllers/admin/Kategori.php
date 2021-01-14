<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('admin/login');
        } //check session
        $this->load->model('kategori_model');
    }

    public function index() {
        $data["mKategori"] = true;
        $data["judul"] = "Kategori";
        $data["kategori"] = $this->kategori_model->show_kategori();
        $data["konten"] = "page/admin/kategori/index";
        $this->load->view("layouts/admin", $data);
    }

    public function add() {
        if(isset($_POST) && count($_POST) > 0){   
            $store = array(
				'kategori_nama' => $this->input->post('kategori_nama'),
				'kategori_detail' => $this->input->post('kategori_detail'),
            );
            try{
                $kategori_id = $this->kategori_model->add_kategori($store);
                $this->session->set_flashdata('success', 'Anda berhasil menambahkan data');
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menambahkan data');
            }
            redirect('admin/kategori/index');
        }
        else {
            $data["mKategori"] = true;
            $data["judul"] = "Tambah kategori";
            $data["konten"] = "page/admin/kategori/add";
            $this->load->view("layouts/admin", $data);
        }
    }

    public function edit($id) {
        $data['kategori'] = $this->kategori_model->get_kategori($id);
        if(isset($data['kategori']['kategori_id'])){
            if(isset($_POST) && count($_POST) > 0) {   
                $update = array(
                    'kategori_nama' => $this->input->post('kategori_nama'),
                    'kategori_detail' => $this->input->post('kategori_detail'),
                );
                
                try{
                    $this->kategori_model->update_kategori($id,$update); 
                    $this->session->set_flashdata('success', 'Anda berhasil mengedit data');
                }
                catch(Exception $eror){
                    $this->session->set_flashdata('fail', 'Anda gagal mengedit data');
                }           
                redirect('admin/kategori/index');
            }
            else{
                $data["mKategori"] = true;
                $data["judul"] = "Edit kategori";
                $data["konten"] = "page/admin/kategori/edit";
                $this->load->view("layouts/admin", $data);
            }
        }
        else {
            $this->session->set_flashdata('fail', 'Edit kategori gagal! Ya iyalah datanya gak ada -_-');
            redirect('admin/kategori/index');
        }
    }

    function delete($id){
        $kategori = $this->kategori_model->get_kategori($id);
        
        if(isset($kategori['kategori_id'])){
            try{
                $this->kategori_model->delete_kategori($id);
                $this->session->set_flashdata('success', 'Anda berhasil menhapus data');
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menghapus data');
            }
            redirect('admin/kategori/index');
        }
        else {
            $this->session->set_flashdata('fail', 'Hapus kategori gagal! Ya iyalah datanya gak ada -_-');
            redirect('admin/kategori/index');
        }
    }

    function show($id){
        $data["judul"] = "Kategori";
        $data["kategori"] = $this->kategori_model->get_kategori($id);
        $data["konten"] = "page/admin/kategori/show";
        $this->load->view("layouts/admin", $data);
    }
}
