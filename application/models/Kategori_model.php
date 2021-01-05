<?php
class Kategori_model extends CI_Model{
    
    private $table_name= "kategori";
    private $primerykey= "kategori_id";

    function __construct() {
        parent::__construct();
    }
    
    function get_kategori($id) {
        return $this->db->get_where($this->table_name,array($this->primerykey=>$id))->row_array();
    }
      
    function show_kategori() {
        $this->db->order_by($this->primerykey, 'desc');
        return $this->db->get($this->table_name)->result_array();
    }
        
    function add_kategori($params){
        $this->db->insert($this->table_name,$params);
        return $this->db->insert_id();
    }
    
    function update_kategori($id,$params){
        $this->db->where($this->primerykey,$id);
        return $this->db->update($this->table_name,$params);
    }
    
    function delete_kategori($id){
        return $this->db->delete($this->table_name,array($this->primerykey=>$id));
    }
}
?>