<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahSpbj'){
	$spbj = $_FILES['spbj']['name'];
	$spbj_temp = $_FILES['spbj']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $spbj);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($spbj_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_spbj VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:spbj.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteSpbj'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_spbj WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['spbj'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_spbj WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:spbj.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateSpbj'){

	$id = $_POST['id'];

	$spbj = $_FILES['spbj']['name'];
	$spbj_lama = $_POST['spbj_lama'];
	$spbj_temp = $_FILES['spbj']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $spbj);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($spbj_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_spbj SET spbj='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$spbj_lama)) {
	    	unlink("../file/".$spbj_lama);
	    }
        # code redicet setelah insert ke index
        header("location:spbj.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>