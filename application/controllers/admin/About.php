<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        } //check session
    }

    public function index() {
        $data["mAbout"] = true;
        $data["judul"] = "About";
        $data["konten"] = "page/admin/about";
        $this->load->view("layouts/admin", $data);
    }
}
