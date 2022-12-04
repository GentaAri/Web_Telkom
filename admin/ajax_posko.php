<?php
include '../include/koneksi.php';

$q = $_GET['term'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE nama LIKE '%".$q."%'");
while ( $isi = mysqli_fetch_array($query)) {
	$row['value'] = $isi['nama'];
 	$row['nik'] = $isi['nik'];
	$row['posisi'] = $isi['position_name'];
	$row['level'] = $isi['level'];
	$row['per'] = $isi['perusahaan'];
	$row_set[]        =$row;
 }

echo json_encode($row_set);
?>