<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahBuku_rekening'){
	$buku_rekening = $_FILES['buku_rekening']['name'];
	$buku_rekening_temp = $_FILES['buku_rekening']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "", $buku_rekening);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($buku_rekening_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_buku_rekening VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:buku_rekening.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteBuku_rekening'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_buku_rekening WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['buku_rekening'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_buku_rekening WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:buku_rekening.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateBuku_rekening'){

	$id = $_POST['id'];

	$buku_rekening = $_FILES['buku_rekening']['name'];
	$buku_rekening_lama = $_POST['buku_rekening_lama'];
	$buku_rekening_temp = $_FILES['buku_rekening']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $buku_rekening);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($buku_rekening_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_buku_rekening SET buku_rekening='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$buku_rekening_lama)) {
	    	unlink("../file/".$buku_rekening_lama);
	    }
        # code redicet setelah insert ke index
        header("location:buku_rekening.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>