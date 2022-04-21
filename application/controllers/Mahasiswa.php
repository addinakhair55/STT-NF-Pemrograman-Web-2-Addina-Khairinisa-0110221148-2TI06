<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
// METHOD MAHASISWA
    public function index(){
        $this->load->model('mahasiswa_model', 'mhs1');

        // buat objek model 1 dan nilainya
        $this->mhs1->id=112;
        $this->mhs1->nim="0110221148";
        $this->mhs1->nama='Addina Khairinisa';
        $this->mhs1->gender='P';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model', 'mhs2');

        // buat objek model 2 dan nilainya
        $this->mhs2->id=113;
        $this->mhs2->nim="01102212345";
        $this->mhs2->nama='Ais';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.55;

        // simpan objek yang kita buat tadi ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/index', $data);
    }
// METHOD DOSEN
    public function dosen(){
        // method Dosen 1
        $this->load->model('dosen_model', 'dsn1');

        $this->dsn1->nidn="11011";
        $this->dsn1->pendidikan='S1';

        // method Dosen 2
        $this->load->model('dosen_model', 'dsn2');

        $this->dsn2->nidn="11022";
        $this->dsn2->pendidikan='S2';

        // method Dosen 3
        $this->load->model('dosen_model', 'dsn3');

        $this->dsn3->nidn="11033";
        $this->dsn3->pendidikan='S3';


        // simpan objek yang kita buat tadi ke dalam array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/dosen', $data);
    }
// METHOD MATAKULIAH
    public function matakuliah(){
        // method Matakuliah 1
        $this->load->model('matakuliah_model', 'matkul1');

        $this->matkul1->nama="Pemrograman WEB 2";
        $this->matkul1->sks='3';
        $this->matkul1->kode="Pemrograman Web 2";

        // method Matakuliah 2
        $this->load->model('matakuliah_model', 'matkul2');

        $this->matkul2->nama="Jaringan Komputer";
        $this->matkul2->sks='3';
        $this->matkul2->kode="Jaringan Komputer";

        // method Matakuliah 3
        $this->load->model('matakuliah_model', 'matkul3');

        $this->matkul3->nama="Basis Data";
        $this->matkul3->sks='4';
        $this->matkul3->kode="Basis Data";

        // method Matakuliah 4
        $this->load->model('matakuliah_model', 'matkul4');

        $this->matkul4->nama="Statistik Probabilitas";
        $this->matkul4->sks='2';
        $this->matkul4->kode="Statistik dan Probabilitas";

        // method Matakuliah 5
        $this->load->model('matakuliah_model', 'matkul5');

        $this->matkul5->nama="PPKn";
        $this->matkul5->sks='2';
        $this->matkul5->kode="PPKN";

        // method Matakuliah 6
        $this->load->model('matakuliah_model', 'matkul6');

        $this->matkul6->nama="Bahasa Inggris";
        $this->matkul6->sks='2';
        $this->matkul6->kode="Bahasa Inggris";

        // method Matakuliah 7
        $this->load->model('matakuliah_model', 'matkul7');

        $this->matkul7->nama="User Interface & User Experience";
        $this->matkul7->sks='3';
        $this->matkul7->kode="UI/UX";

        // method Matakuliah 8
        $this->load->model('matakuliah_model', 'matkul8');

        $this->matkul8->nama="Komunikasi Efektif";
        $this->matkul8->sks='2';
        $this->matkul8->kode="Komunikasi Efektif";

        // simpan objek yang kita buat tadi ke dalam array
        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5, $this->matkul6, $this->matkul7, $this->matkul8];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_matkul'] = $list_matkul;
        // render data dan kirim data ke dalam view
        $this->load->view('mahasiswa/matakuliah', $data);

        }
    }
?>