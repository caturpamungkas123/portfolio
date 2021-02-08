<?php echo $this->extend('layout/templet'); ?>

<?php echo $this->section('content'); ?>
<!-- Headre Conta -->
<div class="breadcrumb-option spad set-bg background" data-setbg="<?php echo base_url() ?>/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    </div>
</div>

<div class="edit" data-edit="<?php echo session()->get('success'); ?>"></div>
<!-- header End -->

<!-- Contact Widget Section Begin -->
<section class="contact-widget spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Address</h4>
                        <p>Desa Ampih Kec.Buluspeantren Kab.Kebumen, Jawa Tengah</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Hotline</h4>
                        <p>081228652***</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                <div class="contact__widget__item">
                    <div class="contact__widget__item__icon">
                        <i class="fa fa-envelope-open"></i>
                    </div>
                    <div class="contact__widget__item__text">
                        <h4>Email</h4>
                        <p>caturp101@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Widget Section End -->

<!-- Call To Action Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10974.91792410461!2d109.69616025720624!3d-7.742921148521293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ac92c7b67d54d%3A0x5027a76e3553e60!2sAmpih%2C%20Kec.%20Buluspesantren%2C%20Kabupaten%20Kebumen%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1602769864468!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <h3>Get in touch</h3>

                    <form action="<?php echo base_url() ?>/contact/save" method="POST">

                        <?php echo csrf_field(); ?>
                        <!-- if else dalam satu baris jika kbenar ?, jika salah : -->
                        <input name="nama" class="form-control form-control-lg <?php echo ($validat->hasError('nama')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Masukan nama lengkap">
                        <div class="invalid-feedback">
                            <?php echo $validat->getError('nama'); ?>
                        </div>
                        <input name="email" class="form-control form-control-lg <?php echo ($validat->hasError('email')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Email">
                        <div class="invalid-feedback">
                            <?php echo $validat->getError('email'); ?>
                        </div>
                        <input name="telepon" class="form-control form-control-lg <?php echo ($validat->hasError('telepon')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Telephon">
                        <div class="invalid-feedback">
                            <?php echo $validat->getError('telepon'); ?>
                        </div>
                        <textarea placeholder="Message" class="pesan" name="pesan"></textarea>

                        <button type="submit" id="tombol" class="site-btn ">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call To Action Section End -->
<?php echo $this->endSection(); ?>