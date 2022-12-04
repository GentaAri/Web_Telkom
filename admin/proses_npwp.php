<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahNpwp'){
	$npwp = $_FILES['npwp']['name'];
	$npwp_temp = $_FILES['npwp']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $npwp);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($npwp_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_npwp VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:npwp.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteNpwp'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_npwp WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['npwp'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_npwp WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:npwp.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateNpwp'){

	$id = $_POST['id'];

	$npwp = $_FILES['npwp']['name'];
	$npwp_lama = $_POST['npwp_lama'];
	$npwp_temp = $_FILES['npwp']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $npwp);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($npwp_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_npwp SET npwp='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$npwp_lama)) {
	    	unlink("../file/".$npwp_lama);
	    }
        # code redicet setelah insert ke index
        header("location:npwp.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>