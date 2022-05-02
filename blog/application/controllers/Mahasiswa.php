<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
// METHOD MAHASISWA
    public function index(){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        // akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }
    
// METHOD DOSEN
    public function dosen(){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/dosen', $data);
        $this->load->view('layouts/footer'); 
    }
    public function detail_dosen($id){
        // akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getById($id);
        $data['dosen'] = $dosen;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/detail_dosen', $data);
        $this->load->view('layouts/footer');
    }

// METHOD MATAKULIAH
    public function matakuliah(){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getAll();
        $data['matkul'] = $matkul;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/matakuliah', $data);
        $this->load->view('layouts/footer'); 
    }
    public function detail_matakuliah($id){
        // akses model matakuliah
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getById($id);
        $data['matkul'] = $matkul;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header'); 
        $this->load->view('mahasiswa/detail_matakuliah', $data);
        $this->load->view('layouts/footer');
    }
    }
?>