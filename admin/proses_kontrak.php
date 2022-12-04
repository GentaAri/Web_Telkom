<?php
include '../include/koneksi.php';



if($_GET['act']== 'tambahKontrak'){
	$ni = $_POST['nik'];
	$nm = $_POST['nama'];
	$pn = $_POST['position_name'];
	$pt = $_POST['position_title'];
	$wi = $_POST['witel']; 
	$lo = $_POST['loker'];
	$st = $_POST['sto'];
	$le = $_POST['level'];
	$su = $_POST['sub_unit'];
	$sk = $_POST['status_kerja'];
	$tm = $_POST['tanggal_mulai_kerja'];
	$ta = $_POST['tanggal_awal_kontrak'];
	$tak = $_POST['tanggal_akhir_kontrak'];
	$nk = $_POST['nomor_kontrak'];
	$kk = $_POST['kontrak_ke'];
	$mi = $_POST['mitra_kerja'];

	$pm = $_FILES['upload_pm']['name'];
	$pm_temp = $_FILES['upload_pm']['tmp_name'];

	$ka1 = $_FILES['upload_k1_ka']['name'];
	$ka1_temp= $_FILES['upload_k1_ka']['tmp_name'];

	$ka2 = $_FILES['upload_k2_ka']['name'];
	$ka2_temp= $_FILES['upload_k2_ka']['tmp_name'];

	$ka3 = $_FILES['upload_k3_ka']['name'];
	$ka3_temp= $_FILES['upload_k3_ka']['tmp_name'];

	$k1_ins = $_FILES['upload_k1_ins']['name'];
	$k1_ins_temp= $_FILES['upload_k1_ins']['tmp_name'];

	$k2_ins = $_FILES['upload_k2_ins']['name'];
	$k2_ins_temp= $_FILES['upload_k2_ins']['tmp_name'];

	$k3_ins = $_FILES['upload_k3_ins']['name'];
	$k3_ins_temp= $_FILES['upload_k3_ins']['tmp_name'];

	$a1_ins = $_FILES['upload_a1_ins']['name'];
	$a1_ins_temp= $_FILES['upload_a1_ins']['tmp_name'];

	$a2_ins = $_FILES['upload_a2_ins']['name'];
	$a2_ins_temp= $_FILES['upload_a2_ins']['tmp_name'];

	$a3_ins = $_FILES['upload_a3_ins']['name'];
	$a3_ins_temp= $_FILES['upload_a3_ins']['tmp_name'];

	// lokasi file
	$dirUpload = "../file/";

	$upload = move_uploaded_file($pm_temp, $dirUpload.$pm);
	$upload1 = move_uploaded_file($ka1_temp, $dirUpload.$ka1);
	$upload2 = move_uploaded_file($ka2_temp, $dirUpload.$ka2);
	$upload3 = move_uploaded_file($ka3_temp, $dirUpload.$ka3);
	$upload4 = move_uploaded_file($k1_ins_temp, $dirUpload.$k1_ins);
	$upload5 = move_uploaded_file($k2_ins_temp, $dirUpload.$k2_ins);
	$upload6 = move_uploaded_file($k3_ins_temp, $dirUpload.$k3_ins);
	$upload7 = move_uploaded_file($a1_ins_temp, $dirUpload.$a1_ins);
	$upload8 = move_uploaded_file($a2_ins_temp, $dirUpload.$a2_ins);
	$upload9 = move_uploaded_file($a3_ins_temp, $dirUpload.$a3_ins);




    //query
    $querytambah =  mysqli_query($koneksi, "INSERT INTO tb_kontrak VALUES(NUll,'$ni','$nm','$pn','$pt','$wi','$lo','$st','$le','$su','$sk','$tm','$ta','$tak','$nk','$kk','$mi','$pm','$ka1','$ka2','$ka3','$k1_ins','$k2_ins','$k3_ins','$a1_ins','$a2_ins','$a3_ins')");

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:kontrak.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
}
elseif ($_GET['act'] == 'deleteKontrak'){
	$id = $_GET['id'];

	$selectSql = "SELECT * FROM tb_kontrak WHERE id= ".$_GET['id']; 
    $result = mysqli_query($koneksi,$selectSql);   
    while ($getRow = mysqli_fetch_array($result)) {
    $getIamgeName1 = $getRow['upload_pm'];
	$getIamgeName2 = $getRow['upload_k1_ta'];
	$getIamgeName3 = $getRow['upload_k2_ta'];
	$getIamgeName4 = $getRow['upload_k3_ta'];
	$getIamgeName5 = $getRow['upload_k1_ins'];
	$getIamgeName6 = $getRow['upload_k2_ins'];
	$getIamgeName7 = $getRow['upload_k3_ins'];
	$getIamgeName8 = $getRow['upload_a1_ins'];
	$getIamgeName9 = $getRow['upload_a2_ins'];
	$getIamgeName10 = $getRow['upload_a3_ins'];

	$createDeletePath1 = "../file/".$getIamgeName1;
	$createDeletePath2 = "../file/".$getIamgeName2;
	$createDeletePath3 = "../file/".$getIamgeName3;
	$createDeletePath4 = "../file/".$getIamgeName4;
	$createDeletePath5 = "../file/".$getIamgeName5;
	$createDeletePath6 = "../file/".$getIamgeName6;
	$createDeletePath7 = "../file/".$getIamgeName7;
	$createDeletePath8 = "../file/".$getIamgeName8;
	$createDeletePath9 = "../file/".$getIamgeName9;
	$createDeletePath10 = "../file/".$getIamgeName10;
	
	if(unlink($createDeletePath1)&&unlink($createDeletePath2)&&unlink($createDeletePath3)&&unlink($createDeletePath4)&&unlink($createDeletePath5)&&unlink($createDeletePath6)&&unlink($createDeletePath7)&&unlink($createDeletePath8)&&unlink($createDeletePath9)&&unlink($createDeletePath10)){

		$deleteSql = "DELETE FROM tb_kontrak WHERE id = '$id'";
		$rsDelete = mysqli_query($koneksi, $deleteSql);	
		
		if($rsDelete){
			header("location:kontrak.php");
			// exit();
		}
	}else{
		$errorMsg = "Unable to delete";
	}
}

    mysqli_close($koneksi);
}
elseif ($_GET['act'] == 'detailKontrak'){
	$id = $_GET['id'];

	// dapatkan nama file
	$sql_="SELECT * FROM tb_kontrak WHERE id='$id";
	$hasil_=mysqli_query($koneksi,$sql_);
	$data=mysqli_fetch_array($hasil_);


    if ($hasil_) {
        # redirect ke index.php
        header("location:detail_kontrak.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}elseif($_GET['act'] == 'updateKontrak'){
	$id = $_POST['id'];	
	$ni = $_POST['nik'];
	$nm = $_POST['nama'];
	$pn = $_POST['position_name'];
	$pt = $_POST['position_title'];
	$wi = $_POST['witel']; 
	$lo = $_POST['loker'];
	$st = $_POST['sto'];
	$le = $_POST['level'];
	$su = $_POST['sub_unit'];
	$sk = $_POST['status_kerja'];
	$tm = $_POST['tanggal_mulai_kerja'];
	$ta = $_POST['tanggal_awal_kontrak'];
	$tak = $_POST['tanggal_akhir_kontrak'];
	$nk = $_POST['nomor_kontrak'];
	$kk = $_POST['kontrak_ke'];
	$mi = $_POST['mitra_kerja'];

	$pm = $_FILES['upload_pm']['name'];
	$pm_lama = $_POST['pm_lama'];
	$pm_temp = $_FILES['upload_pm']['tmp_name'];

	$ka1 = $_FILES['upload_k1_ka']['name'];
	$k1_ka_lama = $_POST['k1_ka_lama'];
	$ka1_temp= $_FILES['upload_k1_ka']['tmp_name'];

	$ka2 = $_FILES['upload_k2_ka']['name'];
	$k2_ka_lama = $_POST['k2_ka_lama'];
	$ka2_temp= $_FILES['upload_k2_ka']['tmp_name'];

	$ka3 = $_FILES['upload_k3_ka']['name'];
	$k3_ka_lama = $_POST['k3_ka_lama'];
	$ka3_temp= $_FILES['upload_k3_ka']['tmp_name'];

	$k1_ins = $_FILES['upload_k1_ins']['name'];
	$k1_ins_lama = $_POST['k1_ins_lama'];
	$k1_ins_temp= $_FILES['upload_k1_ins']['tmp_name'];

	$k2_ins = $_FILES['upload_k2_ins']['name'];
	$k2_ins_lama = $_POST['k2_ins_lama'];
	$k2_ins_temp= $_FILES['upload_k2_ins']['tmp_name'];

	$k3_ins = $_FILES['upload_k3_ins']['name'];
	$k3_ins_lama = $_POST['k3_ins_lama'];
	$k3_ins_temp= $_FILES['upload_k3_ins']['tmp_name'];

	$a1_ins = $_FILES['upload_a1_ins']['name'];
	$a1_ins_lama = $_POST['a1_ins_lama'];
	$a1_ins_temp= $_FILES['upload_a1_ins']['tmp_name'];

	$a2_ins = $_FILES['upload_a2_ins']['name'];
	$a2_ins_lama = $_POST['a2_ins_lama'];
	$a2_ins_temp= $_FILES['upload_a2_ins']['tmp_name'];

	$a3_ins = $_FILES['upload_a3_ins']['name'];
	$a3_ins_lama = $_POST['a3_ins_lama'];
	$a3_ins_temp= $_FILES['upload_a3_ins']['tmp_name'];

   $sql = ("UPDATE tb_kontrak SET nik='$ni',nama='$nm',position_name='$pn',position_title='$pt',witel='$wi',loker='$lo',sto='$st',level='$le',sub_unit='$su',status_kerja='$sk',tanggal_mulai_kerja='$tm',tanggal_awal_kontrak='$ta',tanggal_akhir_kontrak='$tak',nomor_kontrak='$nk',kontrak_ke='$kk',mitra_kerja='$mi',upload_pm='$pm',upload_k1_ta='$ka1',upload_k2_ta='$ka2',upload_k3_ta='$ka3',upload_k1_ins='$k1_ins',upload_k2_ins='$k2_ins',upload_k3_ins='$k3_ins',upload_a1_ins='$a1_ins',upload_a2_ins='$a2_ins',upload_a3_ins='$a3_ins' WHERE id ='$id'");
	$querytambah =  mysqli_query($koneksi, $sql);

	// lokasi file
	$dirUpload = "../file/";

	$upload1 = move_uploaded_file($pm_temp, $dirUpload.$pm);
	$upload2 = move_uploaded_file($ka1_temp, $dirUpload.$ka1);
	$upload3 = move_uploaded_file($ka2_temp, $dirUpload.$ka2);
	$upload4 = move_uploaded_file($ka3_temp, $dirUpload.$ka3);
	$upload5 = move_uploaded_file($k1_ins_temp, $dirUpload.$k1_ins);
	$upload6 = move_uploaded_file($k2_ins_temp, $dirUpload.$k2_ins);
	$upload7 = move_uploaded_file($k3_ins_temp, $dirUpload.$k3_ins);
	$upload8 = move_uploaded_file($a1_ins_temp, $dirUpload.$a1_ins);
	$upload9 = move_uploaded_file($a2_ins_temp, $dirUpload.$a2_ins);
	$upload10 = move_uploaded_file($a3_ins_temp, $dirUpload.$a3_ins);

	if ($querytambah) {
		if($upload1&&$upload2&&$upload3&&$upload4&&$upload5&&$upload6&&$upload7&&$upload8&&$upload9&&$upload10){

	    if (file_exists("../file/".$pm_lama)&&file_exists("../file/".$k1_ka_lama)&&file_exists("../file/".$k2_ka_lama)&&file_exists("../file/".$k3_ka_lama)&&file_exists("../file/".$k1_ins_lama)&&file_exists("../file/".$k2_ins_lama)&&file_exists("../file/".$k3_ins_lama)&&file_exists("../file/".$a1_ins_lama)&&file_exists("../file/".$a2_ins_lama)&&file_exists("../file/".$a3_ins_lama)) {
	    	unlink("../file/".$pm_lama);
	    	unlink("../file/".$k1_ka_lama);
	    	unlink("../file/".$k2_ka_lama);
	    	unlink("../file/".$k1_ka_lama);
	    	unlink("../file/".$k1_ins_lama);
	    	unlink("../file/".$k2_ins_lama);
	    	unlink("../file/".$k3_ins_lama);
	    	unlink("../file/".$a1_ins_lama);
	    	unlink("../file/".$a2_ins_lama);
	    	unlink("../file/".$a3_ins_lama);
	    }
        # code redicet setelah insert ke index
        
	}
    header("location:kontrak.php");
}else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }
    
}
?>