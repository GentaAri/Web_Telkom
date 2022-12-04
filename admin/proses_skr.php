<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahSkr'){
	$skr = $_FILES['skr']['name'];
	$skr_temp = $_FILES['skr']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $skr);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($skr_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_skr VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:skr.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteSkr'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_skr WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['skr'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_skr WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:skr.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateSkr'){

	$id = $_POST['id'];

	$skr = $_FILES['skr']['name'];
	$skr_lama = $_POST['skr_lama'];
	$skr_temp = $_FILES['skr']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $skr);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($skr_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_skr SET skr='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$skr_lama)) {
	    	unlink("../file/".$skr_lama);
	    }
        # code redicet setelah insert ke index
        header("location:skr.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>