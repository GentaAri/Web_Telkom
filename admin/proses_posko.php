<?php
include '../include/koneksi.php';

if($_GET['act']== 'tambahPosko'){
	$nik = $_POST['nik'];
	$nama = $_POST['nama_kar'];
	$posisi = $_POST['posisi'];
	$level = $_POST['level'];
	$per = $_POST['per'];
	$tanggal = $_POST['tanggal'];
	$kat = $_POST['kat'];
	$witel = $_POST['witel'];




    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_posko VALUES(NULl,'$nik','$nama','$posisi','$level','$per','$tanggal','$kat','$witel')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:posko.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}elseif ($_GET['act'] == 'deletePosko'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_posko WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:posko.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
if($_GET['act']== 'updatePosko'){

	$id = $_POST['id'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama_kar'];
	$posisi = $_POST['posisi'];
	$level = $_POST['level'];
	$per = $_POST['per'];
	$tanggal = $_POST['tanggal'];
	$kat = $_POST['kat'];
	$witel = $_POST['witel'];




    //query
	 $sql = "UPDATE tb_posko SET nik='$nik',nama='$nama',posisi='$posisi',level='$level',perusahaan='$per',tanggal='$tanggal',kategori='$kat',witel='$witel' WHERE id = '$id'";

    $querytambah =  mysqli_query($koneksi, $sql);

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:posko.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}


?>