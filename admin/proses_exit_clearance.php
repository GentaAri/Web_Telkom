<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahExit_clearance'){
	$exit_clearance = $_FILES['exit_clearance']['name'];
	$exit_clearance_temp = $_FILES['exit_clearance']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $exit_clearance);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($exit_clearance_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_exit_clearance VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:exit_clearance.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteExit_clearance'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_exit_clearance WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['exit_clearance'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_exit_clearance WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:exit_clearance.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateExit_clearance'){

	$id = $_POST['id'];

	$exit_clearance = $_FILES['exit_clearance']['name'];
	$exit_clearance_lama = $_POST['exit_clearance_lama'];
	$exit_clearance_temp = $_FILES['exit_clearance']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $exit_clearance);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($exit_clearance_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_exit_clearance SET exit_clearance='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$exit_clearance_lama)) {
	    	unlink("../file/".$exit_clearance_lama);
	    }
        # code redicet setelah insert ke index
        header("location:exit_clearance.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>