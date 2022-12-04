<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahKk'){
	$kk = $_FILES['kk']['name'];
	$kk_temp = $_FILES['kk']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $kk);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($kk_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_kk VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:kk.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteKk'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_kk WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['kk'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_kk WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:kk.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateKk'){

	$id = $_POST['id'];

	$kk = $_FILES['kk']['name'];
	$kk_lama = $_POST['kk_lama'];
	$kk_temp = $_FILES['kk']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $kk);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($kk_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_kk SET kk='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$kk_lama)) {
	    	unlink("../file/".$kk_lama);
	    }
        # code redicet setelah insert ke index
        header("location:kk.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>