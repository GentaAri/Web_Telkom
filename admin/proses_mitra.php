<?php
include '../include/koneksi.php';
// membaca kode Kar terbesar
$query_ko = "SELECT max(id) as maxKode FROM tb_karyawan";
$hasil = mysqli_query($koneksi, $query_ko);
$data  = mysqli_fetch_array($hasil);
$kodeKar = $data['maxKode'];

$noUrut = (int) substr($kodeKar, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "KAR";
$newID = $char . sprintf("%03s", $noUrut);

if($_GET['act']== 'tambahMitra'){
	$labor = $_POST['labor'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$no_ktp = $_POST['no_ktp'];
	$no_telepon = $_POST['no_telepon'];
	$no_telepon_yang_dihubungi = $_POST['no_telepon_yang_dihubungi'];
	$nama_keluarga = $_POST['nama_keluarga'];
	$nama_perusahaan = $_POST['nama_perusahaan'];
	$position_title = $_POST['position_title'];
	$level = $_POST['level'];
	$sto = $_POST['sto'];
	$sektor = $_POST['sektor'];
	$leader = $_POST['leader'];



    //query
    
    $sql = "INSERT INTO tb_karyawan_mitra_operasi VALUES (NULl, '$labor' , '$nik', '$nama', '$no_ktp', '$no_telepon', '$no_telepon_yang_dihubungi', '$nama_keluarga', '$nama_perusahaan', '$position_title', '$level', '$sto', '$sektor', '$leader','$newID')";

    $queryKar= mysqli_query($koneksi, "INSERT INTO tb_karyawan VALUES('$newID','$nik','$nama','$position_title','$level','$nama_perusahaan')");
	$querytambah =  mysqli_query($koneksi,$sql);
    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:karyawan_mitra.php");
    }
    else{
        echo "ERROR, tidak berhasil ". mysqli_error($koneksi);
    }

}
elseif ($_GET['act'] == 'deleteMitra'){
    $id = $_GET['id_kar'];
    $id_kar = $_GET['id_kar'];

    // $sql   = "DELETE a*, b* FROM tb_karyawan_mitra_operasi a, tb_karyawan b WHERE a.id = '$id' AND b.id_kar = '$id_kar'";
	$sql = "DELETE a.*, b.* FROM tb_karyawan_mitra_operasi a JOIN tb_karyawan b ON a.id_kar = b.id WHERE a.id_kar = '$id'";

	$querydelete  = mysqli_query($koneksi, $sql);

    //query hapus
    // $sql ="DELETE FROM tb_karyawan WHERE id_kar = '$id'";
    // $sql2 = "DELETE FROM tb_karyawan_mitra_operasi WHERE id = '$id_kar'";
    // $querydelete = mysqli_query($koneksi, $sql);
    // $querydeletes = mysqli_query($koneksi, $sql2);

    if ($querydelete) {
        # redirect ke index.php
        header("location:karyawan_mitra.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
if($_GET['act']== 'updateMitra'){

	$id = $_POST['id'];
	$id_kar = $_POST['id_kar'];

	$labor = $_POST['labor'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$no_ktp = $_POST['no_ktp'];
	$no_telepon = $_POST['no_telepon'];
	$no_telepon_yang_dihubungi = $_POST['no_telepon_yang_dihubungi'];
	$nama_keluarga = $_POST['nama_keluarga'];
	$nama_perusahaan = $_POST['nama_perusahaan'];
	$position_title = $_POST['position_title'];
	$level = $_POST['level'];
	$sto = $_POST['sto'];
	$sektor = $_POST['sektor'];
	$leader = $_POST['leader'];



    //query
	 $sql = "UPDATE tb_karyawan_mitra_operasi, tb_karyawan SET tb_karyawan_mitra_operasi.labor='$labor' , tb_karyawan_mitra_operasi.nik='$nik', tb_karyawan_mitra_operasi.nama='$nama', tb_karyawan_mitra_operasi.no_ktp='$no_ktp', tb_karyawan_mitra_operasi.no_telepon='$no_telepon', tb_karyawan_mitra_operasi.no_telepon_yang_dihubungi='$no_telepon_yang_dihubungi', tb_karyawan_mitra_operasi.nama_keluarga='$nama_keluarga', tb_karyawan_mitra_operasi.nama_perusahaan='$nama_perusahaan', tb_karyawan_mitra_operasi.position_title='$position_title', tb_karyawan_mitra_operasi.level='$level', tb_karyawan_mitra_operasi.sto='$sto', tb_karyawan_mitra_operasi.sektor='$sektor', tb_karyawan_mitra_operasi.leader='$leader',tb_karyawan.nik ='$nik', tb_karyawan.nama = '$nama',tb_karyawan.position_name = '$position_title', tb_karyawan.level = '$level', tb_karyawan.perusahaan = '$nama_perusahaan' WHERE tb_karyawan_mitra_operasi.id_kar=tb_karyawan.id AND tb_karyawan.id = '$id_kar'";

    $querytambah =  mysqli_query($koneksi, $sql);

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:karyawan_mitra.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}

?>