<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<div class="container">
    <h3> Data Laporan</h3>

    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>User ID</th>
            <th>Tanggal</th>
            <th>Total Harga</th>
            <th>No Meja</th>
            <th>Nama Pemesan</th>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach($data as $row):
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['user_id']?></td>
                <td><?=$row['tanggal']?></td>
                <td><?=$row['total_harga']?></td>
                <td><?=$row['no_meja']?></td>
                <td><?=$row['nama_pemesan']?></td>
            </tr>
            <?php
            $no++;
            endforeach?>
        </tbody>
    </table>
</div>
<?= $this->endSection()?>