<?php
include '../include/koneksi.php';
if($_GET['act']== 'tambahSakit'){
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
    $ket = $_POST['keterangan_surat_sakit'];
    $tanggal = $_POST['tanggal_sektor_surat_sakit'];

    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_surat_sakit VALUES(NUll,'$nik','$nama','$position_name','$position_title','$level','$sub_unit','$witel','$lokasi','$loker','$sto','$waktu','$ket','$tanggal')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:surat_sakit.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}elseif ($_GET['act'] == 'deleteSakit'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_surat_sakit WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:surat_sakit.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
elseif ($_GET['act'] == 'updateSakit'){
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
    $ket = $_POST['keterangan_surat_sakit'];
    $tanggal = $_POST['tanggal_sektor_surat_sakit'];

    //query
    $sql = "UPDATE tb_surat_sakit SET nik = '$nik',nama = '$nama', position_name = '$position_name',position_title = '$position_title',level = '$level',sub_unit = '$sub_unit',witel = '$witel',lokasi = '$lokasi',loker = '$loker',sto = '$sto',waktu = '$waktu',keterangan_surat_sakit = '$ket',tanggal_sektor_surat_sakit = '$tanggal' WHERE id=$id";
    $querytambah =  mysqli_query($koneksi,$sql );

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:surat_sakit.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
?>