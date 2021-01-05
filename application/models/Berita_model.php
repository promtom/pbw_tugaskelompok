<?php
class Berita_model extends CI_Model{
    
    private $table_name= "berita";
    private $primerykey= "brt_id";

    function __construct() {
        parent::__construct();
    }
    
    public function jumlah_berita(){
        return $this->db->count_all($this->table_name);
    }

    function get_berita($id) {
        return $this->db->get_where($this->table_name,array($this->primerykey=>$id))->row_array();
    }

    function show_berita() {
        $this->db->order_by($this->primerykey, 'desc');
        return $this->db->get($this->table_name)->result_array();
    }

    function list_berita($limit, $start){
        $this->db->order_by('brt_tgl', 'desc');
        return $this->db->get($this->table_name, $limit, $start)->result_array(); 
    }

    function rank_berita() {
        $this->db->order_by('brt_view', 'desc');
        return $this->db->get($this->table_name, 5)->result_array();
    }
       
    function add_berita($params){
        $this->db->insert($this->table_name,$params);
        return $this->db->insert_id();
    }

    function update_berita($id,$params){
        $this->db->where($this->primerykey,$id);
        return $this->db->update($this->table_name,$params);
    }
    
    function vote_berita($id) {
        $this->db->set('brt_view', 'brt_view+1', FALSE);
        $this->db->where($this->primerykey,$id);
        $this->db->update($this->table_name);
    }
    
    function delete_berita($id){
        return $this->db->delete($this->table_name,array($this->primerykey=>$id));
    }
}
?>