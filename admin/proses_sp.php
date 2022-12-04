<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahSp'){
	$sp = $_FILES['sp']['name'];
	$sp_temp = $_FILES['sp']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $sp);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($sp_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_sp VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:sp.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteSp'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_sp WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['sp'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_sp WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:sp.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateSp'){

	$id = $_POST['id'];

	$sp = $_FILES['sp']['name'];
	$sp_lama = $_POST['sp_lama'];
	$sp_temp = $_FILES['sp']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $sp);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($sp_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_sp SET sp='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$sp_lama)) {
	    	unlink("../file/".$sp_lama);
	    }
        # code redicet setelah insert ke index
        header("location:sp.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>