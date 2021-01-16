<?php
class Backup extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('berita_model');
        $this->load->model('kategori_model');
        $this->load->model('user_model');
    } 

    function index(){
        $data["bHome"] = true;
        $data['judul'] = "PBW News";
        $data["konten"] = "page/backup/home";
        $data['user'] = $this->user_model->show_user();
        /* PAGINATION */
            $config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
            $config['base_url'] .= "://" . $_SERVER['HTTP_HOST']; // ambil 'localhost/'
            $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).'/backup/index';
            $config['total_rows'] = $this->berita_model->jumlah_berita();
            $config['per_page'] = 3;
            $config['num_links'] = 2;

            $config['full_tag_open'] = '
                <nav>
                    <ul class="pagination pagination-lg pg-secondary mb justify-content-center">
            '; 
            $config['full_tag_close'] = '
                    </ul>
                </nav>
            '; 

            $config['first_link'] = 'Awal';
            $config['first_tag_open'] = '<li class="page-item">'; 
            $config['first_tag_close'] = '</li>'; 
            
            $config['last_link'] = 'Akhir';
            $config['last_tag_open'] = '<li class="page-item">'; 
            $config['last_tag_close'] = '</li>'; 
            
            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">'; 
            $config['next_tag_close'] = '</li>'; 
            
            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="page-item">'; 
            $config['prev_tag_close'] = '</li>'; 
            
            $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">'; 
            $config['cur_tag_close'] = '</a></li>'; 
            
            $config['num_tag_open'] = '<li class="page-item">'; 
            $config['num_tag_close'] = '</li>'; 
            //class link
            $config['attributes'] = array('class' => 'page-link');

            //manggil paginationnya
            $data['start'] = $this->uri->segment(3);//ambil data di segment ke 3
            $this->pagination->initialize($config);
        /* */
        $data['berita'] = $this->berita_model->list_berita($config['per_page'], $data['start']);
        $this->load->view('layouts/backup', $data);
    }

    function about(){
        $data["bAbout"] = true;
        $data['judul'] = "PBW News";
        $data["konten"] = "page/backup/about";
        $data['user'] = $this->user_model->show_user();
        $this->load->view('layouts/backup', $data);
    }
    
    function konten($id){
        $data['judul'] = "PBW News";
        $data["konten"] = "page/backup/konten";
        $data["berita"] = $this->berita_model->get_berita($id);
        $data['user'] = $this->user_model->show_user();
        $data["kategori"] = $this->kategori_model->show_kategori();
        $this->load->view('layouts/backup', $data);
    }
}
?>