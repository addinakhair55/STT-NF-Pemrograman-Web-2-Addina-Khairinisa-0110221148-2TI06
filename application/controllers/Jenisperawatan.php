<?php
class Jenisperawatan extends CI_Controller{
    // membuat method index
// METHOD jenis
    public function index(){
        // akses model jenis
        $this->load->model('jenisperawatan_model');
        $jenis = $this->jenisperawatan_model->getAll();
        $data['jenis'] = $jenis;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('jenisperawatan/index', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model jenis
        $this->load->model('jenisperawatan_model');
        $jenis = $this->jenisperawatan_model->getById($id);
        $data['jenis'] = $jenis;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('jenisperawatan/detail', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    
    public function form(){
        $this->load->view('layouts/header');
        $this->load->view('jenisperawatan/form');
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function save(){
        // akses ke model jenis
        $this->load->model('jenisperawatan_model', 'jenisperawatan'); //1
        $_nama = $this->input->post('nama');
      
        $data_jenis['nama'] = $_nama; //2


       if((!empty($_idedit))){  //update
           $data_jenis['id'] = $_idedit;
           $this->jenis->update($data_jenis);
       }else{
        //    data baru
        $this->jenisperawatan->simpan($data_jenis);
       }
       redirect('jenisperawatan','refresh');
    }
    public function edit($id){
        // akses model jenis
        $this->load->model('jenisperawatan_model','jenisperawatan');
        $obj_jenis = $this->jenisperawatan->getById($id);
        $data['obj_jenis'] = $obj_jenis;
        $this->load->view('layouts/header');
        $this->load->view('jenisperawatan/edit', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('layouts/footer');
    }
    public function delete($id){
        $this->load->model('jenisperawatan_model','jenisperawatan');
        // Mengecek data jenis berdasarkan id
        $data_jenis['id'] = $id;
        $this->jenisperawatan->delete($data_jenis);
        redirect('jenisperawatan','refresh');
    }
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('logged_in')){
            // redirect('/login');
        }
    }
}
?>