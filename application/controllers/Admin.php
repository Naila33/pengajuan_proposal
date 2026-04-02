<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/footer');
    }

    public function mahasiswa() {
        $this->load->view('templates/header');
        $this->load->view('admin/mahasiswa');
        $this->load->view('templates/footer');
    }

    public function dosen() {
        $this->load->view('templates/header');
        $this->load->view('admin/dosen');
        $this->load->view('templates/footer');
    }

    public function validasi() {
        $this->load->view('templates/header');
        $this->load->view('admin/validasi');
        $this->load->view('templates/footer');
    }
}