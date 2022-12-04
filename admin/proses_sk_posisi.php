<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahSk_posisi'){
	$sk_posisi = $_FILES['sk_posisi']['name'];
	$sk_posisi_temp = $_FILES['sk_posisi']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $sk_posisi);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($sk_posisi_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_sk_posisi VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:sk_posisi.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteSk_posisi'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_sk_posisi WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['sk_posisi'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_sk_posisi WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:sk_posisi.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateSk_posisi'){

	$id = $_POST['id'];

	$sk_posisi = $_FILES['sk_posisi']['name'];
	$sk_posisi_lama = $_POST['sk_posisi_lama'];
	$sk_posisi_temp = $_FILES['sk_posisi']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $sk_posisi);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($sk_posisi_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_sk_posisi SET sk_posisi='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$sk_posisi_lama)) {
	    	unlink("../file/".$sk_posisi_lama);
	    }
        # code redicet setelah insert ke index
        header("location:sk_posisi.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>