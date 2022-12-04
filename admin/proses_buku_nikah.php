<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahBuku_nikah'){
	$buku_nikah = $_FILES['buku_nikah']['name'];
	$buku_nikah_temp = $_FILES['buku_nikah']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $buku_nikah);
	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($buku_nikah_temp, $dirUpload.$file_name);

    //query
    $querytambah = mysqli_query($koneksi, "INSERT INTO tb_buku_nikah VALUES (NULL,'$file_name')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:buku_nikah.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteBuku_nikah'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_buku_nikah WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['buku_nikah'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	
	if(unlink($createDeletePath1)){

		$deleteSql = "DELETE FROM tb_buku_nikah WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:buku_nikah.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete Image";
	}
}
    mysqli_close($koneksi);
}
if($_GET['act']== 'updateBuku_nikah'){

	$id = $_POST['id'];

	$buku_nikah = $_FILES['buku_nikah']['name'];
	$buku_nikah_lama = $_POST['buku_nikah_lama'];
	$buku_nikah_temp = $_FILES['buku_nikah']['tmp_name'];
	$file_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $buku_nikah);

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($buku_nikah_temp, $dirUpload.$file_name);
	if($upload){
    //query
    $querytambah = mysqli_query($koneksi, "UPDATE tb_buku_nikah SET buku_nikah='$file_name' WHERE id=$id");

	    if (file_exists("../file/".$buku_nikah_lama)) {
	    	unlink("../file/".$buku_nikah_lama);
	    }
        # code redicet setelah insert ke index
        header("location:buku_nikah.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}

?>