<?php 
include '../include/koneksi.php';

if($_GET['act']== 'print'){
	$id = $_GET['id'];

	$sql = "INSERT INTO tb_print (nama_mgr,nik_mgr,jabatan_mgr,nama,nik,jabatan,tanggal_mulai,tanggal_selesai,id_spbu,penugasan,alamat,kota) SELECT nama_mgr,nik_mgr,jabatan_mgr,nama,nik,jabatan,tanggal_mulai,tanggal_selesai,id_spbu,penugasan,alamat,kota FROM tb_surat WHERE id ='$id'";

	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		echo "<script>alert('Data Berhasil Ditambahkan Untuk Di Export Ke PDF'); window.history.back(); location.reload();</script>";
		// header('location: surat.php');
	}
}
if($_GET['act']== 'print2'){
	$id = $_GET['id'];

	$sql = "INSERT INTO tb_print2 (nama_mgr,nik_mgr,jabatan_mgr,nama,nik,jabatan,tanggal_mulai,tanggal_selesai,penugasan) SELECT nama_mgr,nik_mgr,jabatan_mgr,nama,nik,jabatan,tanggal_mulai,tanggal_selesai,penugasan FROM tb_surat_opr WHERE id ='$id'";

	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		echo "<script>alert('Data Berhasil Ditambahkan Untuk Di Export Ke PDF'); window.history.back(); location.reload();</script>";
		// header('location: surat.php');
	}
}
?>