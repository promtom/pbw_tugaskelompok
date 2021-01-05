<?php
class Blog extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('berita_model');
        $this->load->model('kategori_model');
        $this->load->model('user_model');
    } 

    function index(){
        $data["bHome"] = true;
        $data['judul'] = "PBW News";
        $data["konten"] = "page/blog/home";
        $data['user'] = $this->user_model->show_user();
        $data['rank'] = $this->berita_model->rank_berita();
        /* PAGINATION */
            $config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
            $config['base_url'] .= "://" . $_SERVER['HTTP_HOST']; // ambil 'localhost/'
            $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).'/blog/index';
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
        $this->load->view('layouts/main', $data);
    }
    
    function konten($id){
        $data["bHome"] = true;
        $data['judul'] = "PBW News";
        $data["konten"] = "page/blog/konten";
        $data['user'] = $this->user_model->show_user();
        $data["kategori"] = $this->kategori_model->show_kategori();
        $data["vote"] = $this->berita_model->vote_berita($id);
        $data['rank'] = $this->berita_model->rank_berita();
        $data["berita"] = $this->berita_model->get_berita($id);
        $this->load->view('layouts/main', $data);
    }

    function about(){
        $data["bAbout"] = true;
        $data['judul'] = "PBW News";
        $data["konten"] = "page/blog/about";
        $data["berita"] = $this->berita_model->show_berita();
        /* PAGINATION */
            $config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
            $config['base_url'] .= "://" . $_SERVER['HTTP_HOST']; // ambil 'localhost/'
            $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']).'/blog/about';
            $config['total_rows'] = $this->user_model->jumlah_user();
            $config['per_page'] = 6;
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
        $data['user'] = $this->user_model->list_user($config['per_page'], $data['start']);
        $this->load->view('layouts/main', $data);
    }
    function thor($id){
        $data["bAbout"] = true;
        $data['judul'] = "PBW News";
        $data["konten"] = "page/blog/profil";
        $data['berita'] = $this->berita_model->show_berita();
        $data["user"] = $this->user_model->get_user($id);
        $this->load->view('layouts/main', $data);
    }
}
?>