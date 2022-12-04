<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahRangking'){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $position_name = $_POST['position_name'];
    $level = $_POST['level'];
    $bulan = $_POST['periode_bulan'];
    $terlambat = $_POST['banyaknya_terlambat'];


    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_rangking VALUES(NUll,'$nik','$nama','$position_name','$level','$bulan','$terlambat')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:rangking.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}elseif ($_GET['act'] == 'deleteRangking'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_rangking WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:rangking.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
elseif ($_GET['act'] == 'updateRangking'){
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $position_name = $_POST['position_name'];
    $level = $_POST['level'];
    $bulan = $_POST['periode_bulan'];
    $terlambat = $_POST['banyaknya_terlambat'];

    //query
    $sql = "UPDATE tb_rangking SET nik = '$nik',nama = '$nama',position_name = '$position_name',level = '$level',periode_bulan = '$bulan',banyaknya_terlambat = '$terlambat' WHERE id=$id";
    $querytambah =  mysqli_query($koneksi,$sql );

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:rangking.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
?>