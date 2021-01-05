<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('admin/login');
        } //check session
        $this->load->model('berita_model');
        $this->load->model('kategori_model');
        $this->load->model('user_model');
    }
    
    public function index() {
        $data["mBerita"] = true;
        $data["judul"] = "Data Berita";
        $data["berita"] = $this->berita_model->show_berita();
        $data["kategori"] = $this->kategori_model->show_kategori();
        $data['user'] = $this->user_model->show_user();
        $data["konten"] = "page/admin/berita/index";
        $this->load->view("layouts/main2", $data);
    }

    public function add() {
        $data["kategori"] = $this->kategori_model->show_kategori();
        if(isset($_POST) && count($_POST) > 0){   
            $store = array(
				'brt_admin' => $this->input->post('brt_admin'),
				'brt_create' => $this->input->post('brt_tgl'),
				'brt_tgl' => $this->input->post('brt_tgl'),
				'brt_judul' => $this->input->post('brt_judul'),
				'brt_isi' => $this->input->post('brt_isi'),
				'brt_kategori' => $this->input->post('brt_kategori'),
            );
            try{
                $berita_id = $this->berita_model->add_berita($store);
                $this->session->set_flashdata('success', 'Anda berhasil menambahkan data');
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menambahkan data');
            }
            redirect('admin/berita/index');
        }
        else {
            $data["mBerita"] = true;
            $data["judul"] = "Tambah berita";
            $data["konten"] = "page/admin/berita/add";
            $this->load->view("layouts/main2", $data);
        }
    }

    public function edit($id) {
        $data['berita'] = $this->berita_model->get_berita($id);
        $data["kategori"] = $this->kategori_model->show_kategori();
        if(isset($data['berita']['brt_id'])){
            if(isset($_POST) && count($_POST) > 0) {   
                $update = array(
                    'brt_admin' => $this->input->post('brt_admin'),
                    'brt_create' => $this->input->post('brt_create'),
                    'brt_judul' => $this->input->post('brt_judul'),
                    'brt_isi' => $this->input->post('brt_isi'),
                    'brt_kategori' => $this->input->post('brt_kategori'),
                );
                
                try{
                    $this->berita_model->update_berita($id,$update); 
                    $this->session->set_flashdata('success', 'Anda berhasil mengedit data');
                }
                catch(Exception $eror){
                    $this->session->set_flashdata('fail', 'Anda gagal mengedit data');
                }           
                redirect('admin/berita/index');
            }
            else{
                $data["mBerita"] = true;
                $data["judul"] = "Edit berita";
                $data["konten"] = "page/admin/berita/edit";
                $this->load->view("layouts/main2", $data);
            }
        }
        else {
            $this->session->set_flashdata('fail', 'Edit berita gagal! Ya iyalah datanya gak ada -_-');
            redirect('admin/berita/index');
        }
    }

    function delete($id){
        $berita = $this->berita_model->get_berita($id);
        
        if(isset($berita['brt_id'])){
            try{
                $this->berita_model->delete_berita($id);
                $this->session->set_flashdata('success', 'Anda berhasil menhapus data');
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menghapus data');
            }
            redirect('admin/berita/index');
        }
        else {
            $this->session->set_flashdata('fail', 'Hapus berita gagal! Ya iyalah datanya gak ada -_-');
            redirect('admin/berita/index');
        }
    }

    function show($id){
        $data["judul"] = "berita";
        $data["mBerita"] = true;
        $data["berita"] = $this->berita_model->get_berita($id);
        $data["kategori"] = $this->kategori_model->show_kategori();
        $data['user'] = $this->user_model->show_user();
        $data["konten"] = "page/admin/berita/show";
        // $data["konten"] = "page/InBuild";
        $this->load->view("layouts/main2", $data);
    }
}
