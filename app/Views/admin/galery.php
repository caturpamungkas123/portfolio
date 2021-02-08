<?php echo $this->extend('layout/admin'); ?>
<?php echo $this->section('content'); ?>
<h2 class="mt-2 ml-4"><?php echo $judul; ?></h2>
<a href="<?php echo base_url() ?>/galery/insert" class="btn btn-primary ml-4 mb-3">Tambah Data</a>
<div class="swal" data-swal="<?php echo session()->get('save'); ?>"></div>
<div class="hapus" data-hapus="<?php echo session()->get('hapus'); ?>"></div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Sampul</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($galery as $g) : ?>
            <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><img width="150" src="<?php echo base_url() ?>/img/portfolio/<?php echo $g['sampul']; ?>" alt=""></td>
                <td><?php echo $g['nama']; ?></td>
                <td>
                    <a href="<?php echo base_url() ?>/galery/detail/<?php echo $g['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="<?php echo base_url() ?>/galery/hapus/<?php echo $g['sampul']; ?>" class="btn btn-danger hapus">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->endSection(); ?>