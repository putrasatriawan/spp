<html>

<head>
    <title></title>
</head>

<body>
    <table class="table table-bordered 2">
        <tr>
            <th>#</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas Id</th>
            <th>Bulan</th>
            <th>Jumlah Bayar</th>
            <th>Status</th>
            <th>Sisa</th>

        </tr>
        <?php $no = 1;
        foreach ($siswa as $s) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $s->nik ?></td>
                <td><?= $s->nama_siswa ?></td>
                <td><?= $s->jenis_kelamin ?></td>
                <td><?= $s->kelas_id ?></td>
                <td><?= $s->bulan_bayar ?></td>
                <td><?= $s->jmlh_bayar ?></td>
                <td><?= $s->status ?></td>
                <td><?= $s->sisa ?></td>
            </tr>
        <?php } ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>