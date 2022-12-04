<?php
include '../include/koneksi.php';

if($_GET['act']== 'tambahSurat'){
	$nama_mgr = $_POST['nama_mgr'];
	$nik_mgr = $_POST['nik_mgr'];
	$posisi_mgr = $_POST['posisi_mgr'];
	$nama = $_POST['nama_karyawan'];
	$nik = $_POST['nik_karyawan'];
	$posisi = $_POST['posisi_karyawan'];
	$sub_unit = $_POST['sub_unit'];
	$nama_pembuat = $_POST['nama_pembuat'];
	$nik_pembuat = $_POST['nik_pembuat'];
	$posisi_pembuat = $_POST['posisi_pembuat'];
	$tanggal = $_POST['tanggal'];
	$permasalahan = $_POST['permasalahan'];


    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_surat_teguran VALUES(NULl,'$nik_mgr','$nama_mgr','$posisi_mgr','$nama','$nik','$posisi','$sub_unit','$nama_pembuat','$nik_pembuat','$posisi_pembuat','$permasalahan','$tanggal')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:surat_teguran.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}elseif ($_GET['act'] == 'deleteSurat'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_surat_teguran WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:surat_teguran.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
if($_GET['act']== 'updateSurat'){

	$id = $_POST['id'];
	$nama_mgr = $_POST['nama_mgr'];
	$nik_mgr = $_POST['nik_mgr'];
	$posisi_mgr = $_POST['posisi_mgr'];
	$nama = $_POST['nama_karyawan'];
	$nik = $_POST['nik_karyawan'];
	$posisi = $_POST['posisi_karyawan'];
	$sub_unit = $_POST['sub_unit'];
	$nama_pembuat = $_POST['nama_pembuat'];
	$nik_pembuat = $_POST['nik_pembuat'];
	$posisi_pembuat = $_POST['posisi_pembuat'];
	$tanggal = $_POST['tanggal'];
	$permasalahan = $_POST['permasalahan'];




    //query
	 $sql = "UPDATE tb_surat_teguran SET nama_mgr='$nama_mgr',nik_mgr='$nik_mgr',posisi_mgr='$posisi_mgr',nama_karyawan='$nama',nik_karyawan='$nik',posisi_karyawan='$posisi',sub_unit='$sub_unit',nama_pembuat='$nama_pembuat',nik_pembuat='$nik_pembuat',posisi_pembuat='$posisi_pembuat',tanggal='$tanggal',permasalahan='$permasalahan' WHERE id = '$id'";

    $querytambah =  mysqli_query($koneksi, $sql);

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:surat_teguran.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}


?>