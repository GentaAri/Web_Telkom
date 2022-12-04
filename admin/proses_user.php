<?php
include '../include/koneksi.php';

if($_GET['act']== 'tambahUser'){
$ni = $_POST['username'];
$nm = $_POST['password'];
$pn = $_POST['role'];

    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_user VALUES(NUll,'$ni','$nm','$pn')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:user.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteUser'){
    $id = $_GET['id_user'];

    //query hapus
    $querydelete = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = '$id'");

    if ($querydelete) {
        # redirect ke index.php
        header("location:user.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
elseif($_GET['act']== 'updateUser'){

	$id = $_POST['id_user'];
	$ni = $_POST['username'];
	$nm = $_POST['password'];
	$pn = $_POST['role'];





    //query
	 $sql = "UPDATE tb_user SET username='$ni',password='$nm',role='$pn' WHERE id_user = '$id'";

    $querytambah =  mysqli_query($koneksi, $sql);

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:user.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}
?>