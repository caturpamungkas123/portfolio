<?php echo $this->extend('layout/detail'); ?>
<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Galery</h2>
            <hr>
            <h4><?php echo $galery['nama'] ?></h4>
            <img src="<?php echo base_url() ?>/img/portfolio/<?php echo $galery['sampul']; ?>" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
<?php echo $this->endSection('content'); ?>