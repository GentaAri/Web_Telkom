<?php
include '../include/koneksi.php';

if($_GET['act']== 'tambahKonseling'){
	$nama_koselor = $_POST['nama_konselor'];
	$nik_konselor = $_POST['nik_konselor'];
	$jabatan_konselor = $_POST['jabatan_konselor'];
	$nama_konseling = $_POST['nama_konseling'];
	$nik_konseling = $_POST['nik_konseling'];
	$jabatan_konseling = $_POST['jabatan_konseling'];
	$lokasi = $_POST['lokasi_kerja_konseling'];
	$tanggal = $_POST['tanggal'];
	$permasalahan = $_POST['permasalahan'];
	$tanggapan = $_POST['tanggapan_terhadap_permasalahan'];
	$usulan = $_POST['usulan'];


    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_konseling VALUES(NULl,'$nama_koselor','$nik_konselor','$jabatan_konselor','$nama_konseling','$nik_konseling','$jabatan_konseling','$lokasi','$tanggal','$permasalahan','$tanggapan','$usulan')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:konseling.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}elseif ($_GET['act'] == 'deleteKonseling'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_konseling WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:konseling.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
if($_GET['act']== 'updateKonseling'){

	$id = $_POST['id'];
	$nama_koselor = $_POST['nama_konselor'];
	$nik_konselor = $_POST['nik_konselor'];
	$jabatan_konselor = $_POST['jabatan_konselor'];
	$nama_konseling = $_POST['nama_konseling'];
	$nik_konseling = $_POST['nik_konseling'];
	$jabatan_konseling = $_POST['jabatan_konseling'];
	$lokasi = $_POST['lokasi_kerja_konseling'];
	$tanggal = $_POST['tanggal'];
	$permasalahan = $_POST['permasalahan'];
	$tanggapan = $_POST['tanggapan_terhadap_permasalahan'];
	$usulan = $_POST['usulan'];



    //query
	 $sql = "UPDATE tb_konseling SET nama_konselor='$nama_koselor', nik_konselor='$nik_konselor', jabatan_konselor='$jabatan_konselor', nama_konseling='$nama_konseling', nik_konseling='$nik_konseling', jabatan_konseling='$jabatan_konseling', lokasi_kerja_konseling='$lokasi', tanggal='$tanggal', permasalahan='$permasalahan', tanggapan_terhadap_permasalahan='$tanggapan', usulan='$usulan' WHERE id = '$id'";

    $querytambah =  mysqli_query($koneksi, $sql);

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:konseling.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}


?>