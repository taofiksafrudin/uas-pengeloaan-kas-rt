<?= $this->include('template/admin_header'); ?>

<h1><?= $title; ?></h1>
<a class="btn-add" href="<?= base_url('/admin/iuran/add');?>">Tambah Transaksi</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>keterangan</th>
            <th>Tanggal</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Jumlah</th>
            <th>ID Warga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if($iuran): foreach($iuran as $row): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['keterangan']; ?></td>
        <td><?= $row['tanggal']; ?></td>
        <td><?= $row['bulan']; ?></td>
        <td><?= $row['tahun']; ?></td>
        <td><?= $row['jumlah']; ?></td>
        <td><?= $row['warga_id']; ?></td>
        <td>
            <a class="btn" href="<?= base_url('/admin/iuran/edit/' .$row['id']);?>">Ubah</a>
            <a class="btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/iuran/delete/' .
            $row['id']);?>">Hapus</a>
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