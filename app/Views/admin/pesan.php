<?php echo $this->extend('layout/admin') ?>
<?php echo $this->section('content') ?>
<div class="container">
    <h2>Daftar Pesan</h2>
    <div class="tabel-responsive">
        <div class="swal" data-swal="<?php echo session()->get('success'); ?>"></div>
        <table class="table table-bordered">
            <thead>
                <tr class="text-center bg-info">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($pesan as $p) : ?>
                    <tr class="text-center">
                        <th scope="row"><?php echo $i++ ?></th>
                        <td><?php echo $p['nama'] ?></td>
                        <td><?php echo $p['email'] ?></td>
                        <td><?php echo $p['telepon'] ?></td>
                        <td><?php echo $p['pesan'] ?></td>
                        <td>
                            <a href="<?php echo base_url() ?>/pesan/hapus/<?php echo $p['slug'] ?>" class="hapus btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php echo $this->endSection() ?>