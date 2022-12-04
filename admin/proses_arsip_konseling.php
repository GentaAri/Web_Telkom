<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahKonseling'){
	$konseling = $_FILES['konseling']['name'];
	$konseling_temp = $_FILES['konseling']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $konseling);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($konseling_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_arsip_konseling VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:arsip_konseling.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteKonseling'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_arsip_konseling WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['konseling'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_arsip_konseling WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:arsip_konseling.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateKonseling'){

	$id = $_POST['id'];

	$konseling = $_FILES['konseling']['name'];
	$konseling_lama = $_POST['konseling_lama'];
	$konseling_temp = $_FILES['konseling']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $konseling);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($konseling_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_arsip_konseling SET konseling='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$konseling_lama)) {
	    	unlink("../file/".$konseling_lama);
	    }
        # code redicet setelah insert ke index
        header("location:arsip_konseling.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>