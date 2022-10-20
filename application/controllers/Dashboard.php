<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('role_id') != '1') {
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Username atau Password Salah !!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
      );
      redirect('auth/login');
    }
  }
  public function index()
  {
    $data = array(
      'title' => 'Dahsboard',
    );
    $this->load->view('template_admin/header');
    $this->load->view('template_admin/sidebar', $data);
    $this->load->view('v_dashboard');
    $this->load->view('template_admin/footer', $data);
  }
}
