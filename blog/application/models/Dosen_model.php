<?php
class Dosen_model extends CI_Model{
    public $nidn;
    public $pendidikan;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table dosen menggunakan query builder
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById($id){
        // menampilkan seluruh data berdasarkan id 
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
}

?>