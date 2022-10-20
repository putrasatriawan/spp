<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Iuran</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="<?= base_url('master/tambahiuran'); ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bulan_bayar">Pembayaran Untuk Bulan</label>
                            <select class="form-control" name="bulan_bayar" id="bulan_bayar" type="text">
                                <option value="">-- Pilih Bulan --</option>
                                <?php
                                $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                $jlh_bln = count($bulan);
                                for ($c = 0; $c < $jlh_bln; $c += 1) {
                                    echo "<option value=$bulan[$c]> $bulan[$c] </option>";
                                }
                                ?>
                            </select>
                            <?= form_error('bulan_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jmlh_bayar_lunas">Jumlah Bayar Lunas (Rp)</label>
                            <input type="number" class="form-control" id="jmlh_bayar_lunas" name="jmlh_bayar_lunas" value="<?= set_value('jmlh_bayar_lunas'); ?>">
                            <?= form_error('jmlh_bayar_lunas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="number" class="form-control" id="tahun" name="tahun" maxlength="4" value="<?= set_value('tahun'); ?>">
                            <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-outline-secondary ml-2" role="button" href="<?= base_url('master/iuran'); ?>">Batal</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>