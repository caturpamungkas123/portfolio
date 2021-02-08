<?php echo $this->extend('layout/templet'); ?>

<?php echo $this->section('content'); ?>
<!-- title -->
<div class="breadcrumb-option spad set-bg background" data-setbg="/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>My Hoby</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end title -->
<!-- content -->
<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio__filter">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".branding">Music</li>
                    <li data-filter=".digital-marketing">Olahraga</li>
                    <li data-filter=".web">Memancing</li>
                    <li data-filter=".photography">Rebahan</li>
                    <li data-filter=" .ecommerce">Suka Iseng</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio__gallery">
            <div class="col-6 col-sm-6 mix branding">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo base_url() ?>/img/hoby/gitar.jpg">

                    </div>
                    <div class="portfolio__item__text">
                        <h4>Gitaris</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 mix digital-marketing">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo base_url() ?>/img/hoby/sepakbola.jpg">

                    </div>
                    <div class="portfolio__item__text">
                        <h4>Sepak Bola</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 mix web">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo base_url() ?>/img/hoby/memancing.jpg">

                    </div>
                    <div class="portfolio__item__text">
                        <h4>Memancing</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 mix photography">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo base_url() ?>/img/hoby/rebahan.jpg">

                    </div>
                    <div class="portfolio__item__text">
                        <h4>Rebahan</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 mix ecommerce">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo base_url() ?>/img/hoby/bikinemosi.jpg">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Bikin Emosi</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 mix branding">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo base_url() ?>/img/hoby/menyanyi.jpg">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Menyanyi</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 mix photography">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo base_url() ?>/img/hoby/tidur.jpg">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Tidur</h4>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 mix ecommerce">
                <div class="portfolio__item">
                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo base_url() ?>/img/hoby/bikinrusakpertemanan.jpg">
                    </div>
                    <div class="portfolio__item__text">
                        <h4>Bikin Rusak Pertemanan</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end content -->
<?php echo $this->endSection(); ?>