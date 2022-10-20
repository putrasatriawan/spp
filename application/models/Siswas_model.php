<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswas_model extends CI_Model
{
    public function tampildata()
    {
        $query = "SELECT *
                    FROM `data_siswa` JOIN `transaksi`
                      ON `data_siswa`.`id`= `transaksi`.`id_siswa` 
        ";
        return $this->db->query($query);
    }
    public function getAllkelas1()
    {
        $query = "SELECT *
                    FROM `kelas` JOIN `data_siswa`
                      ON `kelas`.`id` = `data_siswa`.`kelas_id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getAllSiswa()
    {
        $query = "SELECT *
                    FROM `kelas` JOIN `data_siswa`
                      ON `kelas`.`id` = `data_siswa`.`kelas_id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getAllWalikelas()
    {
        return $this->db->get('walikelas')->result_array();
    }

    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }


    public function getAllTransaksi()
    {
        $query = "SELECT *
                    FROM `data_siswa` JOIN `transaksi`
                      ON `data_siswa`.`id`= `transaksi`.`id_siswa` 
        ";

        return $this->db->query($query)->result_array();
    }

    public function transaksilaporan($id)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('data_siswa', 'transaksi.id = data_siswa.id');
        return $this->db->get()->row($id);
    }

    public function getSemuaTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }
    public function getTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }

    public function getAllIuran()
    {
        return $this->db->get('iuran')->result_array();
    }

    public function getSiswaByNik($nik)
    {
        return $this->db->get_where('data_siswa', ['nik' => $nik])->row_array();
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('data_siswa', ['id' => $id])->row_array();
    }

    public function tambahSiswa()
    {
        $data = [
            'nik'              => $this->input->post('nik', true),
            'nok'              => $this->input->post('nok', true),
            'nama_siswa'       => $this->input->post('nama_siswa', true),
            'jenis_kelamin'    => $this->input->post('jenis_kelamin', true),
            'kelas_id'         => $this->input->post('kelas_id', true),
            'nama_ayah'        => $this->input->post('nama_ayah', true),
            'nama_ibu'         => $this->input->post('nama_ibu', true),
            'alamat_ortu'      => $this->input->post('alamat_ortu', true)
        ];

        $this->db->insert('data_siswa', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! data siswa berhasil di tambah</div>
            ');
        redirect('siswa/siswa');
    }


    public function tambahTransaksi()
    {

        $jumlahBayar    = $this->input->post('jmlh_bayar');
        $bulanBayar     = $this->input->post('bulan_bayar');
        $tahunBayar     = $this->input->post('tahun_bayar');
        $cek            = $this->db->get_where('iuran', ['bulan_bayar' => $bulanBayar, 'tahun' => $tahunBayar])->row_array();

        if (!$cek) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                data iuran untuk bulan <strong>' . $bulanBayar . '</strong> tahun <strong>' . $tahunBayar . '</strong> belum di tambah, silahkan lakukan tambah data di master</div>');
            redirect('siswa/tambahtransaksi');
        } else {

            $sisa   = $cek['jmlh_bayar_lunas'] - $jumlahBayar;

            if ($sisa <= 0) {
                $status = 'Lunas';
            } else {
                $status = 'Belum Lunas';
            }
        }


        $data = [
            'id_siswa'          => $this->input->post('id', true),
            'bulan_bayar'       => $this->input->post('bulan_bayar', true),
            'tahun_bayar'       => $this->input->post('tahun_bayar', true),
            'jmlh_bayar'        => $this->input->post('jmlh_bayar', true),
            'status'            => $status,
            'sisa'              => $sisa,
            'tgl_bayar'         => time(),
            // 'nama_petugas'      => $this->input->post('nama_petugas', true)
        ];

        $this->db->insert('transaksi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! data transaksi siswa berhasil di tambah</div>
            ');
        redirect('siswa/transaksi');
    }

    public function editSiswa($nik)
    {
        $data = [
            'nik'           => $this->input->post('nik', true),
            'nok'           => $this->input->post('nok', true),
            'nama_siswa'    => $this->input->post('nama_siswa', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'kelas_id'      => $this->input->post('kelas_id', true),
            'nama_ayah'     => $this->input->post('nama_ayah', true),
            'nama_ibu'      => $this->input->post('nama_ibu', true),
            'alamat_ortu'   => $this->input->post('alamat_ortu', true)
        ];

        $this->db->set($data);
        $this->db->where('nik', $nik);
        $this->db->update('data_siswa', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            data siswa berhasil di ubah</div>
            ');
        redirect('siswa/siswa');
    }

    public function hapusSiswa($nik)
    {
        $result = $this->db->get_where('data_siswa', ['nik' => $nik])->row_array();

        if (!$result) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data siswa gagal dihapus! data tidak ditemukan</div>
                ');
            redirect('siswa/siswa');
        } else {
            $this->db->where('nik', $nik);
            $this->db->delete('data_siswa');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Siswa Berhasil dihapus!</div>
                ');
            redirect('siswa/siswa');
        }
    }
    public function hapusTransaksi($id)
    {
        $result = $this->db->get_where('transaksi', ['id' => $id])->row_array();

        if (!$result) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data  Transaksi  siswa gagal dihapus! data tidak ditemukan</div>
                ');
            redirect('siswa/transaksi');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('transaksi');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Transaksi Siswa Berhasil dihapus!</div>
                ');
            redirect('siswa/transaksi');
        }
    }

    public function editTransaksi($id, $data)
    {
        $data = [
            'id'           => $this->input->post('id', true),
            'bulan_bayar'           => $this->input->post('bulan_bayar', true),
            'tahun_bayar'    => $this->input->post('tahun_bayar', true),
            'jmlh_bayar' => $this->input->post('tahun_bayar', true),
            'status'      => $this->input->post('status', true),
            'sisa'     => $this->input->post('sisa', true),
            'tgl_bayar'      => $this->input->post('tgl_bayar', true),
            // 'nama_petugas'   => $this->input->post('nama_petugas', true)
        ];

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('transaksi', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            data transaksi berhasil di ubah</div>
            ');
        redirect('siswa/transaksi');
    }
    public function getTransaksiById($id)
    {
        return $this->db->get_where('transaksi', ['id' => $id])->row_array();
    }
    public function updateTransaksi($data, $id)
    {
        $this->db->update('transaksi', $data, array('id' => $id));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }
    public function lihat($id)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->where('id', $id);

        return $this->db->get();
    }

    public function printdata($transaksi_id)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('transaksi', 'transaksi.id = data_siswa.id', 'is NULL', $transaksi_id);
        return $this->db->get()->row_array();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('data_siswa');
        $this->db->like('nik', $keyword);
        $this->db->or_like('nok', $keyword);
        $this->db->or_like('nama_siswa', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('nama_ayah', $keyword);
        $this->db->or_like('nama_ibu', $keyword);
        return $this->db->get()->result();
    }
}
