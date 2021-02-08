<?php echo $this->extend('layout/templet'); ?>

<?php echo $this->section('content'); ?>
<!-- header title -->
<div class="breadcrumb-option spad set-bg background" data-setbg="/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>About us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header title -->

<!-- conten -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 contact-widget text-center">
            <div class="breadcrumb__text pt-5">
                <h2 class="judul_biodata">Biodata Singkat</h2>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12 contact-widget">
    <div class="media">
        <div class="media-left mr-4">
            <?php foreach ($biodata as $b) : ?>
                <img class="img-thumbnail media-object" src="<?php echo base_url() ?>/img/biodata/<?php echo $b['sampul']; ?>" alt="">
        </div>
        <div class="media-body">
            <div class="judul">
                <blockquote>
                    <h4 class="judul">Nama :</h4>
                    <p class="judul"><?php echo $b['nama']; ?></p>
                    <h4 class="judul">Tempat Tanggal Lahir :</h4>
                    <p class="judul"><?php echo $b['ttl']; ?></p>
                    <h4 class="judul">Alamat :</h4>
                    <p class="judul"><?php echo $b['alamat']; ?></p>
                    <h4 class="judul">Suporter :</h4>
                    <p class="judul"><?php echo $b['suporter']; ?></p>
                </blockquote>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- end conten -->
<!-- sekolah -->
<section class="sekolah">
    <div class="breadcrumb-option spad set-bg" data-setbg="<?php echo base_url() ?>/img/breadcrumb-bg.jpg">
        <div class="container-fluid pb-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text pt-5">
                        <h2 class="pendidikan_singkat">Pendidikan Singkat</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-3">
            <div class="row">
                <?php foreach ($pendidikan as $p) : ?>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <img src="<?php echo base_url() ?>/img/pendidikan/<?php echo $p['sampul']; ?>" class="rounded float-left" alt="" width="700" height="400">
                    </div>
                    <div class="col-md-6 smk mt-3">
                        <div class="sejarah">
                            <h3>Nama Sekolah</h3>
                            <p><?php echo $p['nama_sekolah']; ?></p>
                            <h3>Angkatan</h3>
                            <p><?php echo $p['angkatan']; ?></p>
                            <h3>Alamat Sekolah</h3>
                            <p><?php echo $p['alamat']; ?></p>
                            <h3>Lulus</h3>
                            <p><?php echo $p['lulus']; ?></p>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- end sekolah -->
<?php echo $this->endSection(); ?>