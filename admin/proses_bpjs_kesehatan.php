<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahBpjs_kesehatan'){
	$bpjs_kesehatan = $_FILES['bpjs_kesehatan']['name'];
	$bpjs_kesehatan_temp = $_FILES['bpjs_kesehatan']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $bpjs_kesehatan);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($bpjs_kesehatan_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_bpjs_kesehatan VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:bpjs_kesehatan.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteBpjs_kesehatan'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_bpjs_kesehatan WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['bpjs_kesehatan'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_bpjs_kesehatan WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:bpjs_kesehatan.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateBpjs_kesehatan'){

	$id = $_POST['id'];

	$bpjs_kesehatan = $_FILES['bpjs_kesehatan']['name'];
	$bpjs_kesehatan_lama = $_POST['bpjs_kesehatan_lama'];
	$bpjs_kesehatan_temp = $_FILES['bpjs_kesehatan']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $bpjs_kesehatan);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($bpjs_kesehatan_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_bpjs_kesehatan SET bpjs_kesehatan='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$bpjs_kesehatan_lama)) {
	    	unlink("../file/".$bpjs_kesehatan_lama);
	    }
        # code redicet setelah insert ke index
        header("location:bpjs_kesehatan.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>