<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Kelas</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="<?= base_url('master/tambahkelas'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= set_value('nama_kelas'); ?>">
                            <?= form_error('nama_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="id_kurikulum">Nama Kurikulum</label>
                            <select class="form-control" name="id_kurikulum" id="id_kurikulum" type="text">
                                <option value="">-- Pilih kurikulum --</option>
                                <?php foreach ($kurikulums as $k) : ?>
                                    <option value="<?= $k['id'] ?>"><?= $k['nama'] . '&nbsp;| Semester ' . $k['semester'] . '&nbsp;| Tahun ' . $k['tahun'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('id_kurikulum', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('master/kelas'); ?>">Batal</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>