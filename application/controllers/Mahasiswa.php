<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Mahasiswa extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Pengajuan Proposal';

        // data dummy (frontend saja)
        $data['user'] = (object)[
            'nim' => '12345678',
            'nama' => 'Adinda Rachmania',
            'prodi' => 'Teknik Informatika'
        ];

        $data['dosen'] = [
            (object)['id'=>1,'nama_dosen'=>'Dosen 1'],
            (object)['id'=>2,'nama_dosen'=>'Dosen 2'],
            (object)['id'=>3,'nama_dosen'=>'Dosen 3'],
        ];

        $data['sudah_pengajuan'] = false;
        
        $data['css'] = 'pengajuan';

        $data['menu'] = 'dashboard'; // atau pengajuan / detail

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail()
    {
        $data['title'] = 'Detail Pengajuan';

        // data dummy
        $data['proposal'] = (object)[
            'nim' => '12345678',
            'nama' => 'Adinda Rachmania',
            'prodi' => 'Teknik Informatika',
            'judul' => 'Sistem Informasi Pengajuan Proposal',
            'link' => 'https://drive.google.com',
            'status' => 'pending',
            'tanggal' => '2026-03-30'

            
        ];

        $data['menu'] = 'dashboard'; // atau pengajuan / detail
        $data['css'] = 'dashboard';

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail_pengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function dashboard()
{
    $data['title'] = 'Dashboard Mahasiswa';

    $data['user'] = (object)[
        'nim' => '12345678',
        'nama' => 'Adinda Rachmania',
        'prodi' => 'Teknik Informatika'
    ];

    $data['sudah_pengajuan'] = false;
    $data['menu'] = 'dashboard';
    $data['css'] = 'dashboard';
    

    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/dashboard', $data);
    $this->load->view('templates/footer');
}   
}
