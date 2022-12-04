<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahPrakerin'){
    $nama_sekolah = $_POST['nama_sekolah'];
    $level = $_POST['level'];
    $jumlah_prakerin = $_POST['jumlah_prakerin'];
    $nama_prakerin = $_POST['nama_prakerin'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $status = $_POST['status'];
    $pic = $_POST['pic'];
    $alokasi = $_POST['alokasi'];
    $penilaian_pic = $_POST['penilaian_pic'];
    $ket_sekolah = $_POST['ket_sekolah'];


    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_prakerin VALUES(NUll,'$nama_sekolah','$level','$jumlah_prakerin','$nama_prakerin','$jenis_kelamin','$tanggal_mulai','$tanggal_selesai','$status','$pic','$alokasi','$penilaian_pic','$ket_sekolah')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:prakerin.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}elseif ($_GET['act'] == 'deletePrakerin'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_prakerin WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:prakerin.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
elseif ($_GET['act'] == 'updatePrakerin'){
    $id = $_POST['id'];

    $nama_sekolah = $_POST['nama_sekolah'];
    $level = $_POST['level'];
    $jumlah_prakerin = $_POST['jumlah_prakerin'];
    $nama_prakerin = $_POST['nama_prakerin'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    $status = $_POST['status'];
    $pic = $_POST['pic'];
    $alokasi = $_POST['alokasi'];
    $penilaian_pic = $_POST['penilaian_pic'];
    $ket_sekolah = $_POST['ket_sekolah'];

    //query
    $querytambah =  mysqli_query($koneksi, "UPDATE tb_prakerin SET nama_sekolah='$nama_sekolah',level='$level',jumlah_prakerin='$jumlah_prakerin',nama_prakerin='$nama_prakerin',jenis_kelamin='$jenis_kelamin',tanggal_mulai='$tanggal_mulai',tanggal_selesai='$tanggal_selesai',status='$status',pic='$pic',alokasi='$alokasi',penilaian_pic='$penilaian_pic',ket_sekolah='$ket_sekolah' WHERE id='$id'");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:prakerin.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
?>