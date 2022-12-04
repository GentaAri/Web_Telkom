<?php
include '../include/koneksi.php';

$q = $_GET['term'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_karyawan_telkom_akses WHERE nama LIKE '%".$q."%'");
while ( $isi = mysqli_fetch_array($query)) {
	$row['value'] = $isi['nama'];
 	$row['nik_konselor'] = $isi['nik'];
	$row['jabatan_konselor'] = $isi['position_title'];
	$row_set[]        =$row;
 }

echo json_encode($row_set);
?>