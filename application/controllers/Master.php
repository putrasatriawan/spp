<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master_model');
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
    public function iuran()
    {
        $data = array(
            'title' => 'Iuran',
        );
        $data['iuran']  = $this->Master_model->getAllIuran();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('master/iuran');
        $this->load->view('template_admin/footer', $data);
    }
    public function tambahiuran()
    {
        $data['title']  = 'Tambah Data Iuran';

        $this->form_validation->set_rules('bulan_bayar', 'Bulan Bayar', 'required|trim', [
            'required' => 'bulan bayar harus dipilih'
        ]);
        $this->form_validation->set_rules('jmlh_bayar_lunas', 'Jumlah Bayar Lunas', 'required|trim|numeric|integer', [
            'required' => 'jumlah bayar lunas harus isi',
            'numeric'  => 'Jumlah harus berupa angka bilangan bulat',
            'integer'  => 'Angka harus berupa bilangan bulat, tanpa karakter lainya'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|min_length[4]|integer', [
            'required' => 'tahun harus diisi',
            'integer' => 'tahun harus berupa bilangan bulat'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('master/tambahiuran', $data);
            $this->load->view('template_admin/footer', $data);
        } else {
            $this->Master_model->tambahIuran();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            data iuran berhasil disimpan!</div>
            ');
            redirect('master/iuran');
        }
    }

    public function hapusiuran($id)
    {
        $this->Master_model->hapusIuran($id);
    }
    public function editiuran()
    {
        $id = $this->input->post('id');
        $result   =   $this->Master_model->getDataIuranById($id);
        if (!$result) {
            redirect('master/iuran');
        } else {
            $data['title']  = 'Edit Data Iuran';
            // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['editiuran'] = $result;

            $this->form_validation->set_rules('jmlh_bayar_lunas', 'Jumlah Bayar Lunas', 'required|trim|numeric|integer', [
                'required' => 'jumlah bayar lunas harus isi',
                'numeric'  => 'Jumlah harus berupa angka bilangan bulat',
                'integer'  => 'Angka harus berupa bilangan bulat, tanpa karakter lainya'
            ]);

            if ($this->form_validation->run() == false) {
                $this->load->view('template_admin/header', $data);
                $this->load->view('templates_admin/sidebar', $data);
                $this->load->view('master/editiuran', $data);
                $this->load->view('template_admin/footer', $data);
            } else {
                $this->Master_model->editIuran($id);
            }
        }
    }
    public function kelas()
    {
        $data = array(
            'title' => 'kelas',
        );
        $data['kelas']  = $this->Master_model->getAllKelas();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('master/kelas');
        $this->load->view('template_admin/footer', $data);
    }

    public function tambahkelas()
    {
        $data['title']  = 'Tambah Data Kelas';
        $data['kurikulums'] = $this->Master_model->getAllKurikulum();

        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required|trim', [
            'required' => 'Nama kelas harus diisi'
        ]);

        $this->form_validation->set_rules('id_kurikulum', 'Kurikulum Kelas', 'required|trim', [
            'required' => 'Kurikulum kelas harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('master/tambahkelas', $data);
            $this->load->view('template_admin/footer');
        } else {
            $this->Master_model->tambahKelas();
        }
    }
    public function hapuskelas($id)
    {
        $this->Master_model->hapusKelas($id);
    }
    public function editkelas()
    {
        $id = $this->input->post('id');
        $result = $this->Master_model->getDataKelasById($id);
        $data['kelas'] = $this->Master_model->getAllKelas($id);
        if (!$result) {
            redirect('master/kelas');
        } else {

            $data['title']  = 'Edit Data Kelas';

            $data['k'] = $result;


            $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required|trim', [
                'required' => 'Nama kelas harus diisi'
            ]);

            $this->form_validation->set_rules('id_kurikulum', 'Kurikulum Kelas', 'required|trim', [
                'required' => 'Kurikulum kelas harus diisi'
            ]);

            if ($this->form_validation->run() == false) {
                $data['kurikulums'] = $this->Master_model->getAllKurikulum();
                $this->load->view('template_admin/header', $data);
                $this->load->view('template_admin/sidebar', $data);
                $this->load->view('master/editkelas');
                $this->load->view('template_admin/footer');
            } else {
                $this->Master_model->editKelas($id);
            }
        }
    }

    public function kurikulum()
    {
        $data = array(
            'title' => 'kelas',
        );
        $data['kurikulum']  = $this->Master_model->getAllKurikulum();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar', $data);
        $this->load->view('master/kurikulum');
        $this->load->view('template_admin/footer', $data);
    }

    public function editkurikulum()
    {
        $id = $this->input->post('id');
        $result   =   $this->Master_model->getDataKurikulumById($id);
        if (!$result) {
            redirect('master/kurikulum');
        } else {
            $data['title']  = 'Edit Data Kurikulum';

            $data['editkurikulum'] = $result;

            $this->form_validation->set_rules('nama', 'Nama Kurikulum', 'required|trim');
            $this->form_validation->set_rules('semester', 'Semester', 'required|trim');

            if ($this->form_validation->run() == false) {
                $this->load->view('template_admin/header', $data);
                $this->load->view('template_admin/sidebar', $data);
                $this->load->view('master/editkurikulum');
                $this->load->view('template_admin/footer', $data);
            } else {
                $this->Master_model->editKurikulum($id);
            }
        }
    }

    public function tambahkurikulum()
    {
        $data['title']  = 'Tambah Data Kurikulum';

        $this->form_validation->set_rules('nama', 'Nama Kurikulum', 'required|trim', [
            'required' => 'Nama kurikulum harus dipilih'
        ]);
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim', [
            'required' => 'Semester harus dipilih'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|min_length[4]|integer', [
            'required' => 'tahun harus diisi',
            'integer' => 'tahun harus berupa bilangan bulat'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template_admin/header', $data);
            $this->load->view('template_admin/sidebar', $data);
            $this->load->view('master/tambahkurikulum');
            $this->load->view('template_admin/footer', $data);
        } else {
            $this->Master_model->tambahKurikulum();
        }
    }
    public function hapuskurikulum($id)
    {
        $this->Master_model->hapusKurikulum($id);
    }
}
