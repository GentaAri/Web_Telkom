<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahKtp'){
	$ktp = $_FILES['ktp']['name'];
	$ktp_temp = $_FILES['ktp']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $ktp);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($ktp_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_ktp VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:ktp.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteKtp'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_ktp WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['ktp'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_ktp WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:ktp.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateKtp'){

	$id = $_POST['id'];

	$ktp = $_FILES['ktp']['name'];
	$ktp_lama = $_POST['ktp_lama'];
	$ktp_temp = $_FILES['ktp']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $ktp);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($ktp_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_ktp SET ktp='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$ktp_lama)) {
	    	unlink("../file/".$ktp_lama);
	    }
        # code redicet setelah insert ke index
        header("location:ktp.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>