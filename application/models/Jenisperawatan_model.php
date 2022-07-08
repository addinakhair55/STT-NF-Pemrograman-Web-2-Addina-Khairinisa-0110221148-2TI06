<?php
class Jenisperawatan_model extends CI_Model{
    // buat property atau variabel
    public $id, $nama;

    public function getAll(){
        // Menampilkan seluruh data yang ada di table merk menggunakan query builder
        $query = $this->db->get('jenisperawatan');
        return $query->result();
    }
    public function getById($id){
        // menampilkan 
        $query = $this->db->get_where('jenisperawatan', ['id' => $id]);
        return $query->row();
    }
    // Baru
    public function simpan($data){
        $sql = "INSERT INTO jenisperawatan (nama) VALUE (?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jenisperawatan SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data jenis perawatan
        $sql = "DELETE FROM jenisperawatan WHERE id=?";
        $this->db->query($sql, $data);
    }
}
?>