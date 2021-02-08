<?php echo $this->extend('layout/admin'); ?>

<?php echo $this->section('content'); ?>
<h2 class="mt-2 ml-4"><?php echo $judul; ?></h2>
<a href="/about/insert" class="btn btn-primary ml-4 mb-3">Tambah Data</a>
<div class="container">
    <h3 class="mx-3 mb-3">Pendidikan</h3>
    <div class="edit" data-edit="<?php echo session()->get('biodata'); ?>"></div>
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
            <?php foreach ($pendidikan as $p) : ?>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><img width="150" src="<?php echo base_url() ?>/img/pendidikan/<?php echo $p['sampul']; ?>" alt=""></td>
                    <td><?php echo $p['nama_sekolah']; ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>/about/<?php echo $p['slug']; ?>" class="btn btn-primary">Detail</a>
                        <a href="<?php echo base_url() ?>/about/edit/<?php echo $p['slug']; ?>" class="btn btn-success">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <hr>
    <h3 class="mx-3 my-3">BioData</h3>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">No</th>
                <th scope="col">Sampul</th>
                <th scope="col">Nama</th>
                <th scope="col">TTL</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($biodata as $b) ?>
            <tr>
                <th><?php echo $i++; ?></th>
                <td><img width="100" src="/img/biodata/<?php echo $b['sampul']; ?>" alt=""></td>
                <td><?php echo $b['nama']; ?></td>
                <td><?php echo $b['ttl']; ?></td>
                <td><?php echo $b['alamat']; ?></td>
                <td><a href="/biodata/edit/<?php echo $b['slug']; ?>" class="btn btn-primary">Edit</a></td>
            </tr>
        </tbody>
    </table>
</div>
<?php echo $this->endSection(); ?>