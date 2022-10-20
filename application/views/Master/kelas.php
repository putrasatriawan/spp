<div class="col-md-12">
    <div>
        <div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="<?= base_url('master/tambahkelas') ?>" type="button" class="btn btn-sm btn-success"><i class="fas fa-user-plus fa-sm"></i> Tambah Kelas</a>
                        </div>
                        <h3 class="card-title">Data Kelas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Kelas</th>
                                    <!-- <th>Kurikulum</th> -->
                                    <th>Semester</th>
                                    <th>Tahun</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kelas as $k) : ?>
                                    <tr>
                                        <td><?= $k['nama_kelas']; ?></td>
                                        <!-- <td><?= $k['nama']; ?></td> -->
                                        <td><?= $k['semester']; ?></td>
                                        <td><?= $k['tahun']; ?></td>
                                        <td class="text-center">
                                            <a href="#editKelas<?= $k['id']; ?>" data-toggle="modal" class="badge badge-info mr-1"><i class="fas fa-edit fa-sm"></i> Edit</a>
                                            <a href="<?= base_url('master/hapuskelas/' . $k['id']); ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">
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

<!-- edit Kelas Modal-->
<?php foreach ($kelas as $k) : ?>
    <div class="modal fade" id="editKelas<?= $k['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Kelas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form method="post" action="<?= base_url('master/editkelas'); ?>">
                        <input type="number" name="id" value="<?= $k['id']; ?>" hidden>
                        <input type="number" name="id_kurikulum" value="<?= $k['id_kurikulum']; ?>" hidden>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label for="nama_kelas">Nama Kelas</label>
                                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $k['nama_kelas']; ?>">
                                    <?= form_error('nama_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('master/kelas'); ?>">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- /.akhir edit Kelas Modal -->