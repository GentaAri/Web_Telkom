<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahUmk'){
	$umk = $_FILES['umk']['name'];
	$umk_temp = $_FILES['umk']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $umk);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($umk_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_umk VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:umk.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteUmk'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_umk WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['umk'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_umk WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:umk.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateUmk'){

	$id = $_POST['id'];

	$umk = $_FILES['umk']['name'];
	$umk_lama = $_POST['umk_lama'];
	$umk_temp = $_FILES['umk']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $umk);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($umk_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_umk SET umk='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$umk_lama)) {
	    	unlink("../file/".$umk_lama);
	    }
        # code redicet setelah insert ke index
        header("location:umk.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>