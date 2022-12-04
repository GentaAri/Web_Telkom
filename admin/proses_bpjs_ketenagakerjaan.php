<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahBpjs_ketenagakerjaan'){
	$bpjs_ketenagakerjaan = $_FILES['bpjs_ketenagakerjaan']['name'];
	$bpjs_ketenagakerjaan_temp = $_FILES['bpjs_ketenagakerjaan']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $bpjs_ketenagakerjaan);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($bpjs_ketenagakerjaan_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_bpjs_ketenagakerjaan VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:bpjs_ketenagakerjaan.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteBpjs_ketenagakerjaan'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_bpjs_ketenagakerjaan WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['bpjs_ketenagakerjaan'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_bpjs_ketenagakerjaan WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:bpjs_ketenagakerjaan.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateBpjs_ketenagakerjaan'){

	$id = $_POST['id'];

	$bpjs_ketenagakerjaan = $_FILES['bpjs_ketenagakerjaan']['name'];
	$bpjs_ketenagakerjaan_lama = $_POST['bpjs_ketenagakerjaan_lama'];
	$bpjs_ketenagakerjaan_temp = $_FILES['bpjs_ketenagakerjaan']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $bpjs_ketenagakerjaan);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($bpjs_ketenagakerjaan_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_bpjs_ketenagakerjaan SET bpjs_ketenagakerjaan='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$bpjs_ketenagakerjaan_lama)) {
	    	unlink("../file/".$bpjs_ketenagakerjaan_lama);
	    }
        # code redicet setelah insert ke index
        header("location:bpjs_ketenagakerjaan.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>