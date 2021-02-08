<?php echo $this->extend('layout/insert'); ?>

<!-- memberikan tanda bahwa index.php di folder komik adalah sebuah conten yg terhubung dg templet-->
<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8 my-3">
            <h2>Form Ubah Pendidikan</h2>

            <form action="<?php echo base_url() ?>/about/update/<?php echo $pendidikan['id']; ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="slug" value="<?php echo $pendidikan['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?php echo $pendidikan['sampul'] ?>">
                <div class="form-group row">
                    <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" autofocus value="<?php echo $pendidikan['nama_sekolah']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $pendidikan['alamat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="angkatan" name="angkatan" value="<?php echo $pendidikan['angkatan']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lulus" class="col-sm-2 col-form-label">Lulus</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lulus" name="lulus" value="<?php echo $pendidikan['lulus']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="<?php echo base_url() ?>/img/pendidikan/<?php echo $pendidikan['sampul']; ?>" alt="" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewimg()">
                            <label class="custom-file-label" for="sampul"><?php echo $pendidikan['sampul'] ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Ubah Data</button>
                        <a href="<?php echo base_url() ?>/about" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>