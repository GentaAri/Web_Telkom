<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahMapping'){
    $ni = $_POST['nik'];
    $nm = $_POST['nama'];
    $pn = $_POST['position_name'];
    $pt = $_POST['position_title'];
    $wi = $_POST['witel'];
    $te = $_POST['teritory'];
    $re = $_POST['regional'];
    $lok = $_POST['lokasi'];
    $lo = $_POST['loker'];
    $st = $_POST['sto'];
    $le = $_POST['level'];
    $bi = $_POST['bizpart_id'];
    $di = $_POST['direktorat'];
    $un = $_POST['unit'];
    $su = $_POST['sub_unit'];
    $sg = $_POST['sub_group'];
    $gf = $_POST['group_fungsi'];
    $cs = $_POST['cost_center'];
    $ob = $_POST['object_id'];

    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_mapping VALUES(NUll,'$ni','$nm','$ob','$pn','$pt','$wi','$te','$re','$lok','$lo','$st','$le','$bi','$di','$un','$su','$sg','$gf','$cs')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:mapping.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}elseif ($_GET['act'] == 'deleteMapping'){
    $id = $_GET['id'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_mapping WHERE id = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:mapping.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
elseif ($_GET['act'] == 'updateMapping'){
    $id = $_POST['id'];

    $ni = $_POST['nik'];
    $nm = $_POST['nama'];
    $pn = $_POST['position_name'];
    $pt = $_POST['position_title'];
    $wi = $_POST['witel'];
    $te = $_POST['teritory'];
    $re = $_POST['regional'];
    $lok = $_POST['lokasi'];
    $lo = $_POST['loker'];
    $st = $_POST['sto'];
    $le = $_POST['level'];
    $bi = $_POST['bizpart_id'];
    $di = $_POST['direktorat'];
    $un = $_POST['unit'];
    $su = $_POST['sub_unit'];
    $sg = $_POST['sub_group'];
    $gf = $_POST['group_fungsi'];
    $cs = $_POST['cost_center'];
    $ob = $_POST['object_id'];

    //query
    $querytambah =  mysqli_query($koneksi, "UPDATE tb_mapping SET nik = '$ni',nama = '$nm',object_id='$ob',position_name='$pn',position_title='$pt',witel='$wi',teritory='$te',regional='$re',lokasi='$lok',loker='$lo',sto='$st',level='$le',bizpart_id='$bi',direktorat='$di',unit='$un',sub_unit='$su',sub_group='$sg',group_fungsi='$gf',cost_center='$cs' WHERE id='$id'");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:mapping.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
?>