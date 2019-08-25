<?php 
include("./koneksi.php");
include("./function/database.php");
include("./function/fungsi_penjualan.php");

$penjualan = new Penjualan;

if(isset($_POST)){
    if($_POST['action'] == "login"){
        $penjualan->login($_POST['username'], $_POST['password']);
		
    }elseif($_POST['action'] == "create"){
        $penjualan->insert('penjualan',[
            
            'id_karyawan',
            'kode_barang',
            'qty',
            'harga_barang',
            'total_harga',
            'keterangan',
        ], [
           
            $_POST['id_karyawan'],
            $_POST['kode_barang'],
            $_POST['qty'],
            $_POST['harga_barang'],
            $_POST['total_harga'],
            $_POST['keterangan'],
        ]);
        
    }else{
        header("Location: login.php");
    }
}