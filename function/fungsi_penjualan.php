<?php 






class Penjualan extends Database{
	
	public $kode_penjualan;
	public $id_karyawan;
	public $kode_barang;
	public $qty;
	public $harga_barang;
	public $total_harga;
	public $keterangan;
	
	public function data($condition=array()){
		$models = $this->select('penjualan',$condition);
		$result = array();
		while($model=mysql_fetch_array($models)){
			$data = new self;
			$data->kode_penjualan = $model['kode_penjualan'];
			$data->id_karyawan = $model['id_karyawan'];
			$data->kode_barang = $model['kode_barang'];
			$data->qty = $model['qty'];
			$data->harga_barang = $model['harga_barang'];
			$data->total_harga = $model['total_harga'];
			$data->keterangan = $model['keterangan'];
			$result[] = $data;
		}
		return $result;
	}
}





