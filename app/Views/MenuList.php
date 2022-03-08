<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<?php
    if (session()->getFlashdata('success')){
?>
<div class="alert-success alert-dismissible fade-show" role="alert">
<?= session()->getFlashdata('success')?>
<button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
</div>
<?php
    }
?>
<div class="container">
    <h3>Data Menu</h3>
    <button type="button" class="btn btn-danger mb-2" data-toggle="modal" data-target="#addMenu">Tambah Data</button>

    <table class="table table-striped">
        <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jenis</th>
        <th>Stok</th>
        <th>Option</th>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach($data as $row):
        ?>
        <tr>
        <td><?=$no?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['jenis']?></td>
            <td><?=$row['stok']?></td>
            <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#editMenu-<?=$row['id']?>">Edit</a>
            <a href="<?=base_url('MenuController/delete/'.$row['id'])?>" onclick="return confirm('Yakin Akan Dihapus?')" class="btn btn-danger btn-sm btn-hapus">Hapus</a></td>
        </tr>
        <form action="<?=base_url('menu/edit/'.$row['id'])?>" method="post">
<div class="modal fade"id="editMenu-<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dimiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('menus')?>" method="post">
            <div class="modal-body">

                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="<?=$row['nama']?>" required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control" value="<?=$row['harga']?>" required>
                </div>
                <div class="form-group">
                    <label>Jenis</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="makanan" <?=$row['jenis']=="makanan"?"checked":""?>>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Makanan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault2" value="minuman" <?=$row['jenis']=="minuman"?"checked":""?>>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Minuman
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault3" value="camilan" <?=$row['jenis']=="camilan"?"checked":""?>>
                        <label class="form-check-label" for="flexRadioDefault3">
                            Camilan
                        </label>
                    </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control" value="<?=$row['stok']?>" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</form>
        <?php
        $no++;
        endforeach?>
    </tbody>
</table>
</div>

<!-- Modal Add Menu -->
<!-- <form action="menu" method="post"> -->
<div class="modal fade" id="addMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dimiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('menu')?>" method="post">
            <div class="modal-body">

                <div class="form-group">
                    <label>Nama Menu</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama menu" required>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" placeholder="harga" required>
                </div>
                <div class="form-group">
                    <label>Jenis</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="makanan">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Makanan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault2" value="minuman">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Minuman
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault3" value="camilan">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Camilan
                        </label>
                    </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" id="stok" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</form>
<!-- End Modal Add Menu -->

<?= $this->endSection()?>