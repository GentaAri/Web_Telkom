<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahFoto'){
	$foto = $_FILES['foto']['name'];
	$foto_temp = $_FILES['foto']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $foto);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($foto_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_foto VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:foto.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteFoto'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_foto WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['foto'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_foto WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:foto.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateFoto'){

	$id = $_POST['id'];

	$foto = $_FILES['foto']['name'];
	$foto_lama = $_POST['foto_lama'];
	$foto_temp = $_FILES['foto']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $foto);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($foto_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_foto SET foto='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$foto_lama)) {
	    	unlink("../file/".$foto_lama);
	    }
        # code redicet setelah insert ke index
        header("location:foto.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>