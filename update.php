<?php 
include("./koneksi.php");
include("./function/database.php");
include("./function/fungsi_penjualan.php");

$penjualan = new Penjualan;
$model =$penjualan->data(['kode_penjualan' => $_GET['id']])[0];
?>

<form action="action.php" method="post">
<table border="1">
	
	<tr>
		<td>Karyawan</td>
		<td><input type="text" name="id_karyawan"
		value="<?=$model->id_karyawan?>"></td>

	</tr>
	<tr>
		<td>Kode Barang</td>
		<td><input type="text" name="kode_barang"
		value="<?=$model->id_karyawan?>"></td>
	</tr>
	<tr>
		<td>Kuantiti</td>
		<td><input type="text" name="qty"
		value="<?=$model->id_karyawan?>"></td>
	</tr>
	<tr>
		<td>Harga Satuan</td>
		<td><input type="text" name="harga_barang"
		value="<?=$model->id_karyawan?>"></td>
	</tr>
	<tr>
		<td>Total Harga</td>
		<td><input type="text" name="total_harga"
		value="<?=$model->id_karyawan?>"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan"
		value="<?=$model->id_karyawan?>"></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="hidden" name="action" value="create">
			<input type="submit" name="submit" value="create">
		</td>
	</tr>
</table>
</form>