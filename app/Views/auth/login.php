<?php echo $this->extend('auth/templet/auth') ?>
<?php echo $this->section('content') ?>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="<?= route_to('login') ?>" method="post">
            <?= csrf_field() ?>

            <h1><?= lang('Auth.loginTitle') ?></h1>
            <?= view('Myth\Auth\Views\_message_block') ?>
            <?php if ($config->validFields === ['email']) : ?>
              <div class="form-group">
                <label for="login"><?= lang('Auth.email') ?></label>
                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                <div class="invalid-feedback">
                  <?= session('errors.login') ?>
                </div>
              </div>
            <?php else : ?>

              <div>
                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                <div class="invalid-feedback">
                  <?= session('errors.login') ?>
                </div>
              </div>
            <?php endif; ?>

            <div>
              <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
              <div class="invalid-feedback">
                <?= session('errors.password') ?>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>

            <div class="clearfix"></div>

            <div class="separator">

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> CATUR PAMUNGKAS</h1>
                <p>Website Ini Dibuat Pada <b>Rabu, 25 November 2020</b></p>
              </div>
            </div>
          </form>
        </section>
      </div>

    </div>
  </div>
</body>
<?php echo $this->endSection() ?>