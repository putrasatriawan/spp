<div class="col-md-12">
    <div>
        <div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">

                        </div>
                        <h3 class="card-title">Data Transaksi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nis</th>
                                    <th>Bulan Bayar</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Status</th>
                                    <th>Sisa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transaksi as $t) : ?>
                                    <tr>
                                        <td><?= $t['nama_siswa']; ?></td>
                                        <td class="text-center"><?= $t['nik']; ?></td>
                                        <td><?= $t['bulan_bayar']; ?></td>
                                        <td>
                                            <?php $angka = $t['jmlh_bayar'];
                                            $rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                            echo $rupiah;
                                            ?>
                                        </td>
                                        <td><?= $t['status']; ?></td>
                                        <td><?php $angka = $t['sisa'];
                                            $rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                            echo $rupiah;
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="#detailModal<?= $t['id']; ?>" data-toggle="modal" class="badge badge-info">
                                                <i class="fas fa-fw fa-book-reader fa-sm"></i> Detail
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</div>

<!-- jQuery -->
<script src="template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="template/dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


<!-- transaksi Modal-->
<?php foreach ($transaksi as $t) : ?>
    <div class=" modal fade" id="detailModal<?= $t['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Trasnsaksi Siswa</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label for="nama_siswa">Nama Siswa</label>
                                    <input class="form-control" id="nama_siswa" value="<?= $t['nama_siswa']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jmlh_bayar">Jumlah Bayar</label>
                                    <input class="form-control" id="jmlh_bayar" value="<?php $angka = $t['jmlh_bayar'];
                                                                                        $rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                                                                        echo $rupiah;
                                                                                        ?>">
                                </div>
                                <div class="form-group">
                                    <label for="bulan_bayar">Untuk Pembayaran Bulan</label>
                                    <input class="form-control" id="bulan_bayar" value="<?= $t['bulan_bayar']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Tahun_bayar">Untuk Pembayaran Tahun</label>
                                    <input class="form-control" id="tahun_bayar" value="<?= $t['tahun_bayar']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status Pembayaran</label>
                                    <input class="form-control" id="status" value="<?= $t['status']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_bayar">Tanggal Pembayaran</label>
                                    <input class="form-control" id="tgl_bayar" value="<?= date('d F Y', $t['tgl_bayar']); ?>">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="nama_petugas">Petugas yang melakukan Pembayaran</label>
                                    <input class="form-control" id="tgl_bayar" value="<?= $t['nama_petugas']; ?>">
                                </div> -->
                                <div class="form-group float-right">
                                    <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('cari_data'); ?>">Tutup</a>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!-- akhir form input -->

                </div>

                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- /.akhir transaksi Modal -->







<style type="text/css">
    @media print {
        .modal_content_body {
            position: absolute;
            z-index: 999999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* or set some fixed value like: 1200px;*/
        }
    }
</style>