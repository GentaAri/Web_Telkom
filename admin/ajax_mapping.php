<?php
include '../include/koneksi.php';

$q = $_GET['term'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_karyawan_telkom_akses  WHERE nama LIKE '%".$q."%'");

while ( $isi = mysqli_fetch_array($query)) {
	$row['value'] = $isi['nama'];
 	$row['nik'] = $isi['nik'];
 	$row['position_name'] = $isi['position_name'];
	$row['position_title'] = $isi['position_title'];	
	$row['lokasi'] = $isi['lokasi'];
	$row['loker'] = $isi['loker'];
	$row['sto'] = $isi['sto'];
	$row['level'] = $isi['level'];
	$row['sub_unit'] = $isi['sub_unit'];
	$row['sub_group'] = $isi['sub_group'];
	$row['group_fungsi'] = $isi['group_fungsi'];
	$row['cost_center'] = $isi['cost_center'];
	$row_set[]        =$row;
 }

echo json_encode($row_set);
?>