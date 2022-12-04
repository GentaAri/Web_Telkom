<?php
include '../include/koneksi.php';

// membaca kode Kar terbesar
$query_ko = "SELECT max(id) as maxKode FROM tb_karyawan";
$hasil = mysqli_query($koneksi, $query_ko);
$data  = mysqli_fetch_array($hasil);
$kodeKar = $data['maxKode'];

$noUrut = (int) substr($kodeKar, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$noUrut++;
$char = "KAR";
$newID = $char . sprintf("%03s", $noUrut);

if($_GET['act']== 'tambahTelkom'){
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$kota_lahir = $_POST['kota_lahir'];
	$agama = $_POST['agama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$jalan = $_POST['jalan'];
	$kota = $_POST['kota'];
	$suku = $_POST['suku'];
	$no_ktp = $_POST['no_ktp'];
	$tanggal_ktp = $_POST['tanggal_ktp'];
	$no_kk = $_POST['no_kk'];
	$no_npwp = $_POST['no_npwp'];
	$no_gsm = $_POST['no_gsm'];
	$email = $_POST['email'];
	$nama_ibu_kandung = $_POST['nama_ibu_kandung'];
	$golongan_darah = $_POST['golongan_darah'];
	$no_bpjs_kesehatan = $_POST['no_bpjs_kesehatan'];
	$no_bpjs_kerenagakerjaan = $_POST['no_bpjs_ketenagakerjaan'];
	$kode_faskes = $_POST['kode_faskes'];
	$kode_faskes_gigi = $_POST['kode_faskes_gigi'];
	$staus_pernikahan = $_POST['status_pernikahan'];
	$tanggal_pernikhan = $_POST['tanggal_pernikahan'];
	$jumlah_anak = $_POST['jumlah_anak'];
	$susunan_keluarga = $_POST['susunan_keluarga'];
	$lokasi = $_POST['lokasi'];
	$tahun_kontark = $_POST['tahun_kontrak'];
	$level_pendidikan = $_POST['level_pendidikan'];
	$position_name = $_POST['position_name'];
	$position_title = $_POST['position_title'];
	$loker = $_POST['loker'];
	$sto = $_POST['sto'];
	$level = $_POST['level'];
	$sub_unit = $_POST['sub_unit'];
	$status_kerja = $_POST['status_kerja'];
	$tanggal_mulai_bekerja = $_POST['tanggal_mulai_bekerja'];
	$tanggal_awal_kontrak = $_POST['tanggal_awal_kontrak'];
	$tanggal_akhir_kontrak = $_POST['tanggal_akhir_kontrak'];
	$tanggal_level_pendidikan = $_POST['tanggal_level_pendidikan'];
	$jurusan = $_POST['jurusan'];
	$penyelenggara_pendidikan = $_POST['penyelengara_pendidikan'];
	$no_rekening = $_POST['no_rekening'];
	$bank = $_POST['bank'];
	$nama_di_rekening = $_POST['nama_di_rekening'];
	$nama_ayah = $_POST['nama_ayah'];
	$jenis_baju = $_POST['jenis_baju'];
	$ukuran_baju = $_POST['ukuran_baju'];
	$ukuran_celana = $_POST['ukuran_celana'];
	$ukuran_sepatu = $_POST['ukuran_sepatu'];
	$mitra_kerja = $_POST['mitra_kerja'];
	$sub_group = $_POST['sub_group'];
	$group_fungsi = $_POST['group_fungsi'];
	$cost_center = $_POST['cost_center'];


    //query
    $sql = "INSERT INTO tb_karyawan_telkom_akses VALUES(NULl,'$nik','$nama','$tanggal_lahir','$kota_lahir','$agama','$jenis_kelamin','$jalan','$kota','$suku','$no_ktp','$tanggal_ktp','$no_kk','$no_npwp','$no_gsm','$email','$nama_ibu_kandung','$golongan_darah','$no_bpjs_kesehatan','$no_bpjs_kerenagakerjaan','$kode_faskes','$kode_faskes_gigi','$staus_pernikahan','$tanggal_pernikhan','$jumlah_anak','$susunan_keluarga','$lokasi','$loker','$sto','$position_name','$position_title','$level','$sub_unit','$status_kerja','$tanggal_mulai_bekerja','$tanggal_awal_kontrak','$tanggal_akhir_kontrak','$tahun_kontark','$level_pendidikan','$tanggal_level_pendidikan','$jurusan','$penyelenggara_pendidikan','$no_rekening','$bank','$nama_di_rekening','$nama_ayah','$jenis_baju','$ukuran_baju','$ukuran_celana','$ukuran_sepatu','$mitra_kerja','$sub_group','$cost_center','$group_fungsi','$newID')";

    $queryKar= mysqli_query($koneksi, "INSERT INTO tb_karyawan VALUES('$newID','$nik','$nama','$position_title','$level','TELKOM AKSES')");
 $querytambah =  mysqli_query($koneksi, $sql);
    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:karyawan_telkom.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}
elseif ($_GET['act'] == 'deleteTelkom'){
    $id = $_GET['id_kar'];

    //query hapus

	$sql = "DELETE a.*, b.* FROM tb_karyawan_telkom_akses a JOIN tb_karyawan b ON a.id_kar = b.id WHERE a.id_kar = '$id'";
    $querydelete = mysqli_query($koneksi, $sql);

    if ($querydelete) {
        # redirect ke index.php
        header("location:karyawan_telkom.php");
    }
    else{
        echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
if($_GET['act']== 'updateTelkom'){

	$id = $_POST['id'];
	$id_kar = $_POST['id_kar'];

	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$kota_lahir = $_POST['kota_lahir'];
	$agama = $_POST['agama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$jalan = $_POST['jalan'];
	$kota = $_POST['kota'];
	$suku = $_POST['suku'];
	$no_ktp = $_POST['no_ktp'];
	$tanggal_ktp = $_POST['tanggal_ktp'];
	$no_kk = $_POST['no_kk'];
	$no_npwp = $_POST['no_npwp'];
	$no_gsm = $_POST['no_gsm'];
	$email = $_POST['email'];
	$nama_ibu_kandung = $_POST['nama_ibu_kandung'];
	$golongan_darah = $_POST['golongan_darah'];
	$no_bpjs_kesehatan = $_POST['no_bpjs_kesehatan'];
	$no_bpjs_kerenagakerjaan = $_POST['no_bpjs_ketenagakerjaan'];
	$kode_faskes = $_POST['kode_faskes'];
	$kode_faskes_gigi = $_POST['kode_faskes_gigi'];
	$staus_pernikahan = $_POST['status_pernikahan'];
	$tanggal_pernikhan = $_POST['tanggal_pernikahan'];
	$jumlah_anak = $_POST['jumlah_anak'];
	$susunan_keluarga = $_POST['susunan_keluarga'];
	$lokasi = $_POST['lokasi'];
	$tahun_kontark = $_POST['tahun_kontrak'];
	$level_pendidikan = $_POST['level_pendidikan'];
	$position_name = $_POST['position_name'];
	$position_title = $_POST['position_title'];
	$loker = $_POST['loker'];
	$sto = $_POST['sto'];
	$level = $_POST['level'];
	$sub_unit = $_POST['sub_unit'];
	$status_kerja = $_POST['status_kerja'];
	$tanggal_mulai_bekerja = $_POST['tanggal_mulai_bekerja'];
	$tanggal_awal_kontrak = $_POST['tanggal_awal_kontrak'];
	$tanggal_akhir_kontrak = $_POST['tanggal_akhir_kontrak'];
	$tanggal_level_pendidikan = $_POST['tanggal_level_pendidikan'];
	$jurusan = $_POST['jurusan'];
	$penyelenggara_pendidikan = $_POST['penyelengara_pendidikan'];
	$no_rekening = $_POST['no_rekening'];
	$bank = $_POST['bank'];
	$nama_di_rekening = $_POST['nama_di_rekening'];
	$nama_ayah = $_POST['nama_ayah'];
	$jenis_baju = $_POST['jenis_baju'];
	$ukuran_baju = $_POST['ukuran_baju'];
	$ukuran_celana = $_POST['ukuran_celana'];
	$ukuran_sepatu = $_POST['ukuran_sepatu'];
	$mitra_kerja = $_POST['mitra_kerja'];
	$sub_group = $_POST['sub_group'];
	$group_fungsi = $_POST['group_fungsi'];
	$cost_center = $_POST['cost_center'];


    //query
    $sql = "UPDATE tb_karyawan_telkom_akses, tb_karyawan SET tb_karyawan_telkom_akses.nik='$nik',tb_karyawan_telkom_akses.nama='$nama',tb_karyawan_telkom_akses.tanggal_lahir='$tanggal_lahir',tb_karyawan_telkom_akses.kota_lahir='$kota_lahir',tb_karyawan_telkom_akses.agama='$agama',tb_karyawan_telkom_akses.jenis_kelamin='$jenis_kelamin',tb_karyawan_telkom_akses.jalan='$jalan',tb_karyawan_telkom_akses.kota='$kota',tb_karyawan_telkom_akses.suku='$suku',tb_karyawan_telkom_akses.no_ktp='$no_ktp',tb_karyawan_telkom_akses.tanggal_ktp='$tanggal_ktp',tb_karyawan_telkom_akses.no_kk='$no_kk',tb_karyawan_telkom_akses.no_npwp='$no_npwp',tb_karyawan_telkom_akses.no_gsm='$no_gsm',tb_karyawan_telkom_akses.email='$email',tb_karyawan_telkom_akses.nama_ibu_kandung='$nama_ibu_kandung',tb_karyawan_telkom_akses.golongan_darah='$golongan_darah',tb_karyawan_telkom_akses.no_bpjs_kesehatan='$no_bpjs_kesehatan',tb_karyawan_telkom_akses.no_bpjs_ketenagakerjaan='$no_bpjs_kerenagakerjaan',tb_karyawan_telkom_akses.kode_faskes='$kode_faskes',tb_karyawan_telkom_akses.kode_faskes_gigi='$kode_faskes_gigi',tb_karyawan_telkom_akses.status_pernikahan='$staus_pernikahan',tb_karyawan_telkom_akses.tanggal_pernikahan='$tanggal_pernikhan',tb_karyawan_telkom_akses.jumlah_anak='$jumlah_anak',tb_karyawan_telkom_akses.susunan_keluarga='$susunan_keluarga',tb_karyawan_telkom_akses.lokasi='$lokasi',tb_karyawan_telkom_akses.loker='$loker',tb_karyawan_telkom_akses.sto='$sto',tb_karyawan_telkom_akses.position_name='$position_name',tb_karyawan_telkom_akses.position_title='$position_title',tb_karyawan_telkom_akses.level='$level',tb_karyawan_telkom_akses.sub_unit='$sub_unit',tb_karyawan_telkom_akses.status_kerja='$status_kerja',tb_karyawan_telkom_akses.tanggal_mulai_bekerja='$tanggal_mulai_bekerja',tb_karyawan_telkom_akses.tanggal_awal_kontrak='$tanggal_awal_kontrak',tb_karyawan_telkom_akses.tanggal_akhir_kontrak='$tanggal_akhir_kontrak',tb_karyawan_telkom_akses.tahun_kontrak='$tahun_kontark',tb_karyawan_telkom_akses.level_pendidikan='$level_pendidikan',tb_karyawan_telkom_akses.tanggal_level_pendidikan='$tanggal_level_pendidikan',tb_karyawan_telkom_akses.jurusan='$jurusan',tb_karyawan_telkom_akses.penyelenggara_pendidikan='$penyelenggara_pendidikan',tb_karyawan_telkom_akses.no_rekening='$no_rekening',tb_karyawan_telkom_akses.bank='$bank',tb_karyawan_telkom_akses.nama_di_rekening='$nama_di_rekening',tb_karyawan_telkom_akses.nama_ayah='$nama_ayah',tb_karyawan_telkom_akses.jenis_baju='$jenis_baju',tb_karyawan_telkom_akses.ukuran_baju='$ukuran_baju',tb_karyawan_telkom_akses.ukuran_celana='$ukuran_celana',tb_karyawan_telkom_akses.ukuran_sepatu='$ukuran_sepatu',tb_karyawan_telkom_akses.mitra_kerja='$mitra_kerja',tb_karyawan_telkom_akses.sub_group='$sub_group',tb_karyawan_telkom_akses.cost_center='$cost_center',tb_karyawan_telkom_akses.group_fungsi='$group_fungsi',tb_karyawan.nik ='$nik', tb_karyawan.nama = '$nama',tb_karyawan.position_name = '$position_title', tb_karyawan.level = '$level' WHERE tb_karyawan_telkom_akses.id_kar=tb_karyawan.id AND tb_karyawan.id = '$id_kar'";

    $querytambah =  mysqli_query($koneksi, $sql);

    if ($querytambah) {
        # code redicet setelah insert ke index
        header("location:karyawan_telkom.php");
    }
    else{
        echo "ERROR, tidak berhasil". mysqli_error($koneksi);
    }

}

?>