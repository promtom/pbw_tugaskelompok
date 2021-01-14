<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('admin/login');
        } //check session
        $this->load->model('auth_model');
    }

    public function index() {
        $data["mHome"] = true;
        $data["judul"] = "Dashboard";
        $data["total"] = [
            "total_user" => $this->auth_model->getCount('user'),
            "total_berita" => $this->auth_model->getCount('berita'),
            "total_kategori" => $this->auth_model->getCount('kategori'),
        ];
        $data["konten"] = "page/admin/home";
        $this->load->view("layouts/admin", $data);
    }

    public function editPass($id) {
        $update = array(
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT)
        );
        try{
            $this->auth_model->chagePass($id,$update);
            $this->session->set_flashdata('success', 'Anda berhasil mengubah password');
        }
        catch(Exception $eror){
            $this->session->set_flashdata('fail', 'Anda gagal mengubah password');
        }
        // redirect("home");
        echo '<script>javascript:history.back()</script>';
    }

    public function editBio($id) {
        $update = array(
            'profil' => $this->input->post('profil', true)
        );
        try{
            $this->auth_model->chagePass($id,$update);
            $this->session->set_flashdata('success', 'Anda berhasil mengubah profil');
        }
        catch(Exception $eror){
            $this->session->set_flashdata('fail', 'Anda gagal mengubah profil');
        }
        // redirect("home");
        echo '<script>javascript:history.back()</script>';
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect("admin/login");
    }
}
