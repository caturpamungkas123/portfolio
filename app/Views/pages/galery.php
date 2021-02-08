<?php echo $this->extend('layout/templet'); ?>
<?php echo $this->section('content'); ?>
<!-- title -->
<div class="breadcrumb-option spad set-bg background" data-setbg="<?php echo base_url() ?>/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Galery</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end title -->
<!-- coneten -->

<div class="portfolio spad">
    <div class="container">
        <div class="row text-center">
            <?php foreach ($galery as $g) : ?>
                <div class="col-6 col-sm-4 mt-3">
                    <img src="<?php echo base_url() ?>/img/portfolio/<?php echo $g['sampul']; ?>" alt="" class="img-thumbnail">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- end Content -->
<?php echo $this->endSection(); ?>