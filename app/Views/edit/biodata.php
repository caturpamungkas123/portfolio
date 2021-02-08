<?php echo $this->extend('layout/insert'); ?>

<!-- memberikan tanda bahwa index.php di folder komik adalah sebuah conten yg terhubung dg templet-->
<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8 my-3">
            <h2>Form Ubah Biodata</h2>

            <form action="<?php echo base_url() ?>/biodata/update/<?php echo $biodata['id']; ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="slug" value="<?php echo $biodata['slug']; ?>">
                <input type="hidden" name="suporter" value="<?php echo $biodata['suporter']; ?>">
                <input type="hidden" name="sampullama" value="<?php echo $biodata['sampul'] ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?php echo $biodata['nama']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ttl" name="ttl" value="<?php echo $biodata['ttl']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $biodata['alamat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="<?php echo base_url() ?>/img/biodata/<?php echo $biodata['sampul']; ?>" alt="" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewimg()">
                            <label class="custom-file-label" for="sampul">Pilih Gambar</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                        <a href="<?php echo base_url() ?>/about" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>