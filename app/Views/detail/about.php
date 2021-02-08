<?php echo $this->extend('layout/detail'); ?>
<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="mt-2">Detail <?php echo $halaman; ?></h4>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() ?>/img/pendidikan/<?php echo $pendidikan['sampul']; ?>" class="card-img" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $pendidikan['nama_sekolah']; ?></h5>
                            <p class="card-text"><b>Alamat : </b><?php echo $pendidikan['alamat']; ?></p>
                            <p class="card-text"><b>Angkatan : </b><?php echo $pendidikan['angkatan']; ?></p>
                            <p class="card-text"><b>Lulus : </b><?php echo $pendidikan['lulus']; ?></p>
                        </div>
                    </div>
                    <a href="<?php echo base_url() ?>/about" class="btn btn-primary mr-4">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection('content'); ?>