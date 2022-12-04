<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahPresensi'){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $position_name = $_POST['position_name'];
    $position_title = $_POST['position_title'];
    $witel = $_POST['witel'];
    $lokasi= $_POST['lokasi'];
    $loker = $_POST['loker'];
    $sto = $_POST['sto'];
    $level = $_POST['level'];
    $sub_unit = $_POST['sub_unit'];
    $waktu = $_POST['waktu'];
    $cek = $_POST['cek_kehadiran'];
    $ket = $_POST['keterangan'];

    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_presensi VALUES(NUll,'$nik','$nama','$position_name','$position_title','$level','$sub_unit','$witel','$lokasi','$loker','$sto','$waktu','$cek','$ket')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:presensi.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}elseif ($_GET['act'] == 'deletePresensi'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_presensi WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:presensi.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
elseif ($_GET['act'] == 'updatePresensi'){
    $id = $_POST['id'];

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $position_name = $_POST['position_name'];
    $position_title = $_POST['position_title'];
    $witel = $_POST['witel'];
    $lokasi= $_POST['lokasi'];
    $loker = $_POST['loker'];
    $sto = $_POST['sto'];
    $level = $_POST['level'];
    $sub_unit = $_POST['sub_unit'];
    $waktu = $_POST['waktu'];
    $cek = $_POST['cek_kehadiran'];
    $ket = $_POST['keterangan'];

    //query
    $sql = "UPDATE tb_presensi SET nik = '$nik',nama = '$nama', position_name = '$position_name',position_title = '$position_title',level = '$level',sub_unit = '$sub_unit',witel = '$witel',lokasi = '$lokasi',loker = '$loker',sto = '$sto',waktu = '$waktu',cek_kehadiran = '$cek',keterangan = '$ket' WHERE id=$id";
    $querytambah =  mysqli_query($koneksi,$sql );

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:presensi.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
?>