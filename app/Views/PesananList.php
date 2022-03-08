<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<?php
    if (session()->getflashdata('success')){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<?= session()->getFlashdata('success')?>
<button type="button" class="close" fata-dismiss="alert" aria-label="close"></button>
</div>
<?php
    }
?>
<div class="row">
    <div class="col-md-6">
        <form action="<?= base_url('pesanan')?>" method="post">
            <div class="card shadow mb-3 border-left-danger">
                <div class="card-body">
                    <div class="form-group">
                        <label for="menu">Menu</label>
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="-">Silahkan Pilih Menu</option>
                            <?php
                            foreach($data as $key => $val) {
                            ?>
                                <option value="<?= $val['id']?>"><?= $val['nama']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" id="jumlah">
                    </div>
                    <div class="form-group">
                         <button type="submit" class="btn btn-danger">Masukkan Keranjang</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <div class="card shadow mb-3 border-left-danger">
            <div class="card-body">
            <form action="<?= base_url('pesanans')?>" method="post">
                <div class="form-group">
                    <label for="nama_pemesan">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan">
                </div>
                <div class="form-group">
                    <label for="no_meja">Nomor Meja</label>
                    <input type="number" class="form-control" name="no_meja" id="no_meja">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="card">
    <div class="card-header">
    <h3 class="card_title">Data Pesanan</h3>
<div class="table-responsiv">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($menu != null) {
                $no = 1;
                foreach($menu as $row) {
            ?>
            <tr>
                <td><?= $no?></td>
                <td><?= $row['nama']?></td>
                <td><?= $row['harga']?></td>
                <td><?= $row['jumlah']?></td>
                <td><?= $row['jumlah']*$row['harga']?></td>
                <td>
                    <a href="<?=base_url('pesanan/delete/'.$row['menu_id'])?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php
                }
            }?>
        </tbody>
    </table>
</div>
</div>
<?= $this->endSection()?>