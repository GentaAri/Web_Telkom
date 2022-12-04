<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahIjazah'){
	$ijazah = $_FILES['ijazah']['name'];
	$ijazah_temp = $_FILES['ijazah']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $ijazah);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($ijazah_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_ijazah VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:ijazah.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteIjazah'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_ijazah WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['ijazah'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_ijazah WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:ijazah.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateIjazah'){

	$id = $_POST['id'];

	$ijazah = $_FILES['ijazah']['name'];
	$ijazah_lama = $_POST['ijazah_lama'];
	$ijazah_temp = $_FILES['ijazah']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $ijazah);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($ijazah_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_ijazah SET ijazah='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$ijazah_lama)) {
	    	unlink("../file/".$ijazah_lama);
	    }
        # code redicet setelah insert ke index
        header("location:ijazah.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>