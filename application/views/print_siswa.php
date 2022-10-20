<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>assets_laporan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--<link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet">-->
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets_laporan/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url(); ?>assets_laporan/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!--<script src="" type="text/javascript"></script>-->

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url(); ?>assets_laporan/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets_laporan/css/sb-admin.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/_laporannode_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets_laporan/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>

    <script src="<?php echo base_url(); ?>assets_laporan/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets_laporan/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js" ></script>-->

<body onload="window.print()">
    <div>

        <div id="content-wrapper" style="margin-top:50px">

            <div class="container-fluid">



                <!-- DataTables Example -->
                <div class="card mb-3" id="cardbayar">
                    <div class="card-header">
                        <center>
                            <b>
                                <h3>Struk Bukti<br></h3>
                                <!-- <h4> <br></h4> -->
                            </b>
                        </center>
                    </div>
                    <div class="card-body card-block">
                        <left>
                            <b>
                                <h3>Data Transaksi <br></h3>
                                <!-- <h4> <br></h4> -->
                            </b>
                        </left>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tabelbayar" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tgl Bayar</th>
                                            <th>Bulan Bayar</th>
                                            <th>Tahun Bayar</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Status</th>
                                            <th>Sisa</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td><?= date('d F Y', $data->tgl_bayar); ?></td>
                                            <td><?= $data->bulan_bayar ?></td>
                                            <td><?= $data->tahun_bayar ?></td>
                                            <td><?= $data->jmlh_bayar ?></td>
                                            <td><?= $data->status ?></td>
                                            <td><?= $data->sisa ?></td>

                                        </tr>
                                    </tbody>


                                </table>
                            </div>
                        </div>
                        <!-- <hr>
                        <left>
                            <b>
                                <h3>Data Siswa <br></h3>
                                <!-- <h4> <br></h4> -->
                        </b>
                        </left>
                        <!-- <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="tabelbayar" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Nis</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td><?= $data->nama_siswa ?></td>
                                        </tr>
                                    </tbody>


                                </table>
                            </div>
                        </div> -->

                        <div class=" row">
                            <div class="col-auto mr-auto"">
                                <div class=" card-body card-block">
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label"></label></div>
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label">Bima, <?php echo date('d M Y') ?></label></div>

                                </div>
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label"></label></div>
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label"></label></div>

                                </div>
                                <br><br><br>
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label"></label></div>
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label"></label> Siswa</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="card-body card-block">
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label"></label></div>
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label">Bima, <?php echo date('d M Y') ?></label></div>

                                </div>
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label"></label></div>
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label">Petugas</label></div>

                                </div>
                                <br><br><br>
                                <div class="row form-group">
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label"></label></div>
                                    <div id="form-tanggal" class="col col-md-12"><label for="select" class=" form-control-label"></label><?= $this->session->userdata('username') ?></< /div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Bootstrap core JavaScript-->
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?php echo base_url(); ?>assets_laporan/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url(); ?>assets_laporan/vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url(); ?>assets_laporan/js/demo/datatables-demo.js"></script>

</body>

</html>