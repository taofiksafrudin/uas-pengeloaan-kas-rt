<?= $this->include('template/admin_header'); ?>

<h1><?= $title; ?></h1>
<a class="btn-add" href="<?= base_url('/admin/warga/add');?>">Tambah Warga</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Alamat</th>
            <th>Nomor Rumah</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if($warga): foreach($warga as $row): ?>
    <tr>
        <td><?= $row['warga_id']; ?></td>
        <td><?= $row['nik']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['kelamin']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['no_rumah']; ?></td>
        <td><?= $row['status']; ?></td>
        <td>
            <a class="btn" href="<?= base_url('/admin/warga/edit/' .$row['warga_id']);?>">Ubah</a>
            <a class="btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/warga/delete/' .
            $row['warga_id']);?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; else: ?>
    <tr>
        <td colspan="4">Belum ada data.</td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>

<?= $this->include('template/admin_footer'); ?>