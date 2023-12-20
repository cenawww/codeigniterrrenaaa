<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pegawai_model');
    }

    public function index()
    {
        $data['pegawai'] = $this->pegawai_model->get_all();
        $this->load->view('pegawai/index', $data);
    }

    public function tambah()
    {
        $this->load->view('pegawai/tambah');
    }

    public function simpan()
    {
        $nama = $this->input->post('nama');

        // Validasi
        if (empty($nama)) {
            echo "Nama tidak boleh kosong";
            return;
        }

        $data = array(
            'nama' => $nama,
            'jabatan' => $this->input->post('jabatan'),
            'gaji' => $this->input->post('gaji')
        );

        $this->pegawai_model->insert($data);

        // Setelah penyimpanan, arahkan kembali ke halaman data pegawai
        redirect('pegawai');
    }
}
