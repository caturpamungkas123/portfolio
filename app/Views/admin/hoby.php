<?php echo $this->extend('layout/admin'); ?>

<?php echo $this->section('content'); ?>
<h2 class="mt-2 ml-4"><?php echo $judul; ?></h2>
<a href="<?php echo base_url() ?>/hoby/insert" class="btn btn-primary ml-4 mb-3">Tambah Data</a>
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
        <?php foreach ($hoby as $h) : ?>
            <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><img width="150" src="<?php echo base_url() ?>/img/hoby/<?php echo $h['sampul']; ?>" alt=""></td>
                <td><?php echo $h['nama']; ?></td>
                <td><a href="<?php echo base_url() ?>/hoby/<?php echo $h['slug']; ?>" class="btn btn-primary">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->endSection(); ?>