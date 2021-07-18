<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form class="warga-add" action="" method="post">
    <p><input type="text" name="nik" placeholder="NIK"></p>
    <p><input type="text" name="nama" placeholder="Nama"></p>
    <p><input type="text" name="kelamin" placeholder="Jenis Kelamin"></p>
    <p><textarea name="alamat" cols="10" rows="10" placeholder="Alamat"></textarea></p>
    <p><input type="text" name="no_rumah" placeholder="Nomor Rumah"></p>
    <p><input type="submit" value="Tambah" class="btn btn-large"></p>
    <a href="<?= base_url('/admin/warga');?>" class="btn btn-back">Batal</a>
</form>

<?= $this->include('template/admin_footer'); ?>
