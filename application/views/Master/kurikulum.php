<div class="col-md-12">
    <div>
        <div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="<?= base_url('master/tambahkurikulum') ?>" type="button" class="btn btn-sm btn-success"><i class="fas fa-user-plus fa-sm"></i> Tambah Kurikulum</a>
                        </div>
                        <h3 class="card-title">Data Kurikulum</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tahun</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kurikulum as $kr) : ?>
                                    <tr>
                                        <td><?= $kr['nama']; ?></td>
                                        <td><?= $kr['tahun']; ?></td>
                                        <td><?= $kr['semester']; ?></td>
                                        <td class="text-center">
                                            <a href="#editKurikulum<?= $kr['id']; ?>" data-toggle="modal" class="badge badge-info mr-1"><i class="fas fa-edit fa-sm"></i> Edit</a>
                                            <a href="<?= base_url('master/hapuskurikulum/' . $kr['id']); ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                                <i class="fas fa-trash-alt fa-sm"></i>
                                                Hapus
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

<!-- edit Kurikulum Modal-->
<?php foreach ($kurikulum as $kr) : ?>
    <div class="modal fade" id="editKurikulum<?= $kr['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Kurikulum</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form method="post" action="<?= base_url('master/editkurikulum'); ?>">
                        <input type="number" name="id" id="id" value="<?= $kr['id']; ?>" hidden>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label for="nama">Nama Kurikulum</label>
                                    <select class="form-control" name="nama" id="nama" type="text">
                                        <option value="<?= $kr['nama'] ?>"><?= $kr['nama'] ?></option>
                                        <option value="K-2013 Paket">K-2013 Paket</option>
                                        <option value="K-2013 SKS">K-2013 SKS</option>
                                        <option value="K-2006 (KTSP)">K-2006 (KTSP)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="semester">Semester</label>
                                    <select class="form-control" name="semester" id="semester" type="text">
                                        <option value="<?= $kr['semester'] ?>"><?= $kr['semester'] ?></option>
                                        <option value="Ganjil">Ganjil</option>
                                        <option value="Genap">Genap</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <input type="number" class="form-control" id="tahun" name="tahun" value="<?= $kr['tahun']; ?>" readonly>
                                </div>
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('master/kurikulum'); ?>">Batal</a>
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
<!-- /.akhir edit Kurikulum Modal -->