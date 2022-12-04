<?php
include '../include/koneksi.php';

if($_GET['act']== 'tambahSurat'){
	$nama_mgr = $_POST['nama_mgr'];
	$nik_mgr = $_POST['nik_mgr'];
	$jabatan_mgr = $_POST['jabatan_mgr'];
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$jabatan = $_POST['jabatan'];
	$tanggal_mulai = $_POST['tanggal_mulai'];
	$tanggal_selesai = $_POST['tanggal_selesai'];
	$penugasan = $_POST['penugasan'];


    //query
    $query = "INSERT INTO tb_surat_opr VALUES";

    $index = 0; // Set index array awal dengan 0
    foreach($nik as $datanis){ // Kita buat perulangan berdasarkan nis sampai data terakhir
        $query .= "(NUll,'".$nama_mgr."','".$nik_mgr."','".$jabatan_mgr."','".$nama[$index]."','".$datanis."','".$jabatan[$index]."','".$tanggal_mulai."','".$tanggal_selesai."','".$penugasan."'),";
        $index++;
    }

    // Kita hilangkan tanda koma di akhir query
    // sehingga kalau di echo $query nya akan sepert ini : (contoh ada 2 data siswa)
    // INSERT INTO siswa VALUES('1011001','Rizaldi','Laki-laki','089288277372','Bandung'),('1011002','Siska','Perempuan','085266255121','Jakarta');
    $query = substr($query, 0, strlen($query) - 1).";";


    //query
    $querytambah =  mysqli_query($koneksi, $query);

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:surat_opr.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}elseif ($_GET['act'] == 'deleteSurat'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_surat_opr WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:surat_opr.php");
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
	$jabatan_mgr = $_POST['jabatan_mgr'];
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$jabatan = $_POST['jabatan'];
	$tanggal_mulai = $_POST['tanggal_mulai'];
	$tanggal_selesai = $_POST['tanggal_selesai'];
	$penugasan = $_POST['penugasan'];




    //query
	 $sql = "UPDATE tb_surat_opr SET nama_mgr='$nama_mgr',nik_mgr='$nik_mgr',jabatan_mgr='$jabatan_mgr',nama='$nama',nik='$nik',jabatan='$jabatan',tanggal_mulai='$tanggal_mulai',tanggal_selesai='$tanggal_selesai',penugasan='$penugasan' WHERE id = '$id'";

    $querytambah =  mysqli_query($koneksi, $sql);

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:surat_opr.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}


?>