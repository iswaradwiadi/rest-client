<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        if( $this->input->post('keyword') ) {
            $data['siswa'] = $this->siswa_model->cariDataSiswa();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data siswa';

        $this->form_validation->set_rules('id_siswa', 'Id Siswa', 'required');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('nomor_induk', 'Nomor Induk', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->tambahDataSiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('siswa');
        }
    }

    public function hapus($id_sis)
    {
        $this->Siswa_model->hapusDataSiswa($id_sis);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('siswa');
    }

    public function detail($id_sis)
    {
        $data['judul'] = 'Detail Data Siswa';
        $data['siswa'] = $this->Siswa_model->getSiswaById($id_sis);
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_siswa)
    {
        $data['judul'] = 'Form Ubah Data Siswa';
        $data['siswa'] = $this->Siswa_model->getSiswaById($id_siswa);
        
       
        $this->form_validation->set_rules('id_siswa', 'Id Siswa', 'required');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('nomor_induk', 'Nomor Induk', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->ubahDataSiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Siswa');
        }
    }

}
