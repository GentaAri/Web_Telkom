<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahUmp'){
	$ump = $_FILES['ump']['name'];
	$ump_temp = $_FILES['ump']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $ump);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($ump_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_ump VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:ump.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteUmp'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_ump WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['ump'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_ump WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:ump.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateUmp'){

	$id = $_POST['id'];

	$ump = $_FILES['ump']['name'];
	$ump_lama = $_POST['ump_lama'];
	$ump_temp = $_FILES['ump']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $ump);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($ump_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_ump SET ump='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$ump_lama)) {
	    	unlink("../file/".$ump_lama);
	    }
        # code redicet setelah insert ke index
        header("location:ump.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>