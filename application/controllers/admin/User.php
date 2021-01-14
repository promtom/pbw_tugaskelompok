<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('admin/login');
        }
        if ($this->session->status!=1) {
            $this->session->set_flashdata('fail', 'akses ditolak');
            redirect('admin/home');
        } //check session
        $this->load->model('User_model');
        $this->load->model('berita_model');
    }

    public function index() {
        $data["mUser"] = true;
        $data["judul"] = "Data User";
        $data["konten"] = "page/InBuild";
        $data['user'] = $this->User_model->show_user();
        $data["konten"] = "page/admin/user/index";
        $this->load->view("layouts/admin", $data);
    }
    public function show($id) {
        $data["mUser"] = true;
        $data["judul"] = "user";
        $data["konten"] = "page/admin/user/show";
        $data['berita'] = $this->berita_model->show_berita();
        $data["user"] = $this->User_model->get_user($id);
        $this->load->view('layouts/main2', $data);
    }

    public function add() {
        if(isset($_POST) && count($_POST) > 0){
            $config['upload_path']      = './assets/img/profil/';
            $config['allowed_types']    = '*';
            $config['max_size']         = 10240;
            $config['encrypt_name']     = true;

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')){
                $img = $this->upload->data();
            }
            else{
                $img = '';
                // $eror = "Error:\n".$this->upload->display_errors();
                // $this->session->set_flashdata('fail', $eror);
                // var_dump($this->upload->display_errors('', ''));
                // var_dump($_FILES);
            }
            $store = array(
                'username' => $this->input->post('username'),
                'name' => $this->input->post('nama'),
                'status' => $this->input->post('status'),
                'profil' => $this->input->post('profil'),
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'foto' => $img['file_name'],
            );
            try{
                $user_id = $this->User_model->add_user($store);
                if($img == ''){
                    $eror = "Terjadi kesalahan upload gambar\nsehingga memakai img default\n\nError:\n".$this->upload->display_errors();
                    $this->session->set_flashdata('info', $eror);
                }
                else{
                    $this->session->set_flashdata('success', 'Anda berhasil menambahkan data');
                }
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menambahkan data');
            }
            redirect('admin/user/index');
        }
        else {
            $data["mUser"] = true;
            $data["judul"] = "Add User";
            $data["konten"] = "page/admin/user/add";
            $this->load->view("layouts/admin", $data);
        }
    }
    public function edit($id) {
        $data['user'] = $this->User_model->get_user($id);
        if(isset($data['user']['ID'])){
            if(isset($_POST) && count($_POST) > 0) {
                $config['upload_path']      = './assets/img/profil/';
                $config['allowed_types']    = '*';
                $config['max_size']         = 10240;
                $config['encrypt_name']     = true;
    
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')){
                    $img = $this->upload->data();
                }
                else{
                    $img['file_name'] =  $this->input->post('old');
                }
                $update = array(
                    'username' => $this->input->post('username'),
                    'name' => $this->input->post('nama'),
                    'status' => $this->input->post('status'),
                    'profil' => $this->input->post('profil'),
                    'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                    'foto' => $img['file_name'],
                );
                
                try{
                    $this->User_model->update_user($id,$update); 
                    $this->session->set_flashdata('success', 'Anda berhasil mengedit data');
                }
                catch(Exception $eror){
                    $this->session->set_flashdata('fail', 'Anda gagal mengedit data');
                }           
                redirect('admin/user/index');
            }
            else{
                $data["muser"] = true;
                $data["judul"] = "Edit user";
                $data["konten"] = "page/admin/user/edit";
                $this->load->view("layouts/admin", $data);
            }
        }
        else {
            $this->session->set_flashdata('fail', 'Edit user gagal! Ya iyalah datanya gak ada -_-');
            redirect('admin/user/index');
        }
    }

    public function delete($id) {
        $user = $this->User_model->get_user($id);
        
        if(isset($user['ID'])){
            try{
                $this->User_model->delete_user($id);
                $this->session->set_flashdata('success', 'Anda berhasil menhapus data');
            }
            catch(Exception $eror){
                $this->session->set_flashdata('fail', 'Anda gagal menghapus data');
            }
            redirect('admin/user/index');
        }
        else {
            $this->session->set_flashdata('fail', 'Hapus user gagal! Ya iyalah datanya gak ada -_-');
            redirect('admin/user/index');
        }
    }
}
