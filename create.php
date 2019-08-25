
<form action="action.php" method="post">
<table border="1">
	
	<tr>
		<td>Karyawan</td>
		<td><input type="text" name="id_karyawan"></td>
	</tr>
	<tr>
		<td>Kode Barang</td>
		<td><input type="text" name="kode_barang"></td>
	</tr>
	<tr>
		<td>Kuantiti</td>
		<td><input type="text" name="qty"></td>
	</tr>
	<tr>
		<td>Harga Satuan</td>
		<td><input type="text" name="harga_barang"></td>
	</tr>
	<tr>
		<td>Total Harga</td>
		<td><input type="text" name="total_harga"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan"></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="hidden" name="action" value="create">
			<input type="submit" name="submit" value="create">
		</td>
	</tr>
</table>
</form>




