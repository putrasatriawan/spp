<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{


    public function index()
    {
        $data = array(
            'title' => 'Test',
        );
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('v_test');
        $this->load->view('template_admin/footer', $data);
    }
}
