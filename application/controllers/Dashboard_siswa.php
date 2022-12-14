<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> Anda Belum Login!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>'
            );
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data = array(
            'title' => 'Dahsboard',
        );
        $this->load->view('template_siswa/header', $data);
        $this->load->view('template_siswa/sidebar', $data);
        $this->load->view('v_dashboard_siswa');
        $this->load->view('template_siswa/footer', $data);
    }
}
