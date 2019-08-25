<?php
include("./koneksi.php");
include("./function/database.php");
include("./function/fungsi_penjualan.php");

$penjualan = new Penjualan;
$models = $penjualan->data();
?>
<table border="1">
	<tr>
		<td>Kode Penjualan</td>
		<td>Karyawan</td>
		<td>Kode Barang</td>
		<td>Kuantiti</td>
		<td>Harga Satuan</td>
		<td>Total Harga</td>
		<td>Keterangan</td>
		<td>Action</td>
	</tr>
	<?php foreach($models as $model): ?>
	<tr>
		<td><?= $model->kode_penjualan ?></td>
		<td><?= $model->id_karyawan ?></td>
		<td><?= $model->kode_barang ?></td>
		<td><?= $model->qty ?></td>
		<td><?= $model->harga_barang ?></td>
		<td><?= $model->total_harga ?></td>
		<td><?= $model->keterangan ?></td>
		<td><a href="update.php?id=<?= $model->kode_penjualan ?>">Ubah</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>




