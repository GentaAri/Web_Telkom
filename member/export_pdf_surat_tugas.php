<?php 
include '../include/koneksi.php';
use setasign\Fpdi\Fpdi;
require_once '../vendor/setasign/fpdf/fpdf.php' ;
require_once '../vendor/setasign/fpdi/src/autoload.php' ;

//require '../vendor/setasign/fpdf/fpdf.php';
//require '../vendor/setasign/fpdi/src/fpdi.php';
ob_start();

if($_GET['act']== 'pdfSurat'){
$id = $_GET["id"];
$sql = "SELECT * FROM tb_surat WHERE id = '$id'";
$data = $koneksi->query($sql);
setlocale(LC_ALL, 'id-ID', 'id_ID');
while($d =$data->fetch_assoc()){
	if($d['id_spbu']!=''){
		// initiate FPDI 
$pdf = new FPDI(); 
// add a page 
$pdf->AddPage(); 
// set the sourcefile 
$pdf->setSourceFile('../template/template_surat_tugas_spbu.pdf'); 
// import page 1 
$tplIdx = $pdf->importPage(1); 
// use the imported page as the template 
$pdf->useTemplate($tplIdx, 0, 0); 

// text font & color
$pdf->AddFont('Gadugi','','gadugi.php');
$pdf->SetFont('Gadugi','',8.5);
$pdf->SetTextColor(0,0,0); 

		$date1=$d['tanggal_mulai'];
		$date2=$d['tanggal_selesai'];

		//nama_mgr
		$pdf->SetXY(53.3, 68.8);
		$line_height = 2.5;
		$width = 160;
		$text = ($d['nama_mgr']);    
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		//nik_mgr
		$pdf->SetXY(53.3, 73.5);
		$line_height = 2.5;
		$width = 160;
		$text = ($d['nik_mgr']);    
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		//jabatan_mgr
		$pdf->SetXY(53.3, 78.2);
		$line_height = 2.5;
		$width = 160;
		$text = ($d['jabatan_mgr']);     
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		//nama
		$pdf->SetXY(37, 110.8);
		$line_height = 2.5;
		$width = 31;
		$text = ($d['nama']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"C");

		//nik
		$pdf->SetXY(70, 110.8);
		$line_height = 2.5;
		$width = 31;
		$text = ($d['nik']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"C");

		//jabatan
		$pdf->SetXY(103, 110.8);
		$line_height = 2.5;
		$width = 47.5;
		$text = ($d['jabatan']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"C");

		//id_spbu
		$pdf->SetXY(37, 124.8);
		$line_height = 2.5;
		$width = 31;
		$text = ($d['id_spbu']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"C");

		//alamat_spbu
		$pdf->SetXY(70, 124.8);
		$line_height = 2.5;
		$width = 80.5;
		$text = ($d['alamat']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"C");

		//kota
		$pdf->SetXY(152.7, 124.8);
		$line_height = 3.5;
		$width = 31;
		$text = ($d['kota']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"C");

		//p1
		$pdf->SetXY(35.3, 133.4);
		$line_height = 2;
		$width =149.5;
		$text = ('Terhitung mulai tanggal '.strftime("%A, %d %B %Y", strtotime($date1)).', saudara ditugaskan sebagai PIC untuk melaksanakan '.$d['penugasan'].'');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"J");

		//p2
		$pdf->SetXY(35.3, 143);
		$line_height = 2;
		$width =149.5;
		$text = ('Surat tugas ini berlaku sejak tanggal '.strftime("%A, %d %B %Y", strtotime($date1)).' s/d '.strftime("%A, %d %B %Y", strtotime($date2)).', dan sewaktu - waktu dapat ditinjau ulang sesuai kebutuhan dan peruntukannya.');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"J");

		//tempat_tanggal
		$pdf->SetXY(35.3, 167);
		$line_height = 2;
		$width =74.5;
		$text = ('Bandar Lampung, '.strftime("%A, %d %B %Y", strtotime($date1)).'');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		$pdf->SetFont('Gadugi','U',8.5);
		//nama_mgr_ttd
		$pdf->SetXY(35.3, 190);
		$line_height = 2.3;
		$width =74.5;
		$text = ($d['nama_mgr']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		$pdf->SetFont('Gadugi','',8.5);
		//nik_mgr_ttd
		$pdf->SetXY(35.3, 194.5);
		$line_height = 2.3;
		$width =74.5;
		$text = ('NIK. '.$d['nik_mgr'].'');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);
		}
}

	}elseif($_GET['act']== 'pdfSuratOpr'){
		$id = $_GET["id"];
$sql = "SELECT * FROM tb_surat_opr WHERE id = '$id'";
$data = $koneksi->query($sql);
setlocale(LC_ALL, 'id-ID', 'id_ID');
while($d =$data->fetch_assoc()){

// initiate FPDI 
$pdf = new FPDI(); 
// add a page 
$pdf->AddPage(); 
// set the sourcefile 
$pdf->setSourceFile('../template/template_surat_tugas_opr.pdf'); 
// import page 1 
$tplIdx = $pdf->importPage(1); 
// use the imported page as the template 
$pdf->useTemplate($tplIdx, 0, 0); 

// text font & color
$pdf->AddFont('Gadugi','','gadugi.php');
$pdf->SetFont('Gadugi','',8.5);
$pdf->SetTextColor(0,0,0); 


		$date1=$d['tanggal_mulai'];
		$date2=$d['tanggal_selesai'];

		//nama_mgr
		$pdf->SetXY(53.3, 68.8);
		$line_height = 2.5;
		$width = 160;
		$text = ($d['nama_mgr']);    
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		//nik_mgr
		$pdf->SetXY(53.3, 73.5);
		$line_height = 2.5;
		$width = 160;
		$text = ($d['nik_mgr']);    
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		//jabatan_mgr
		$pdf->SetXY(53.3, 78.2);
		$line_height = 2.5;
		$width = 160;
		$text = ($d['jabatan_mgr']);     
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		//nama
		$pdf->SetXY(37, 110.8);
		$line_height = 2.5;
		$width = 31;
		$text = ($d['nama']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"C");

		//nik
		$pdf->SetXY(70, 110.8);
		$line_height = 2.5;
		$width = 31;
		$text = ($d['nik']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"C");

		//jabatan
		$pdf->SetXY(103, 110.8);
		$line_height = 2.5;
		$width = 47.5;
		$text = ($d['jabatan']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"C");

		//p1
		$pdf->SetXY(35.3, 120.4);
		$line_height = 2;
		$width =149.5;
		$text = ('Terhitung mulai tanggal '.strftime("%A, %d %B %Y", strtotime($date1)).', saudara ditugaskan sebagai PIC untuk melaksanakan '.$d['penugasan'].'');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"J");

		//p2
		$pdf->SetXY(35.3, 129);
		$line_height = 2;
		$width =149.5;
		$text = ('Surat tugas ini berlaku sejak tanggal '.strftime("%A, %d %B %Y", strtotime($date1)).' s/d '.strftime("%A, %d %B %Y", strtotime($date2)).', dan sewaktu - waktu dapat ditinjau ulang sesuai kebutuhan dan peruntukannya.');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"J");

		//tempat_tanggal
		$pdf->SetXY(35.3, 157.5);
		$line_height = 2;
		$width =74.5;
		$text = ('Bandar Lampung, '.strftime("%A, %d %B %Y", strtotime($date1)).'');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		$pdf->SetFont('Gadugi','U',8.5);
		//nama_mgr_ttd
		$pdf->SetXY(35.3, 180.8);
		$line_height = 2.3;
		$width =74.5;
		$text = ($d['nama_mgr']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		$pdf->SetFont('Gadugi','',8.5);
		//nik_mgr_ttd
		$pdf->SetXY(35.3, 185);
		$line_height = 2.3;
		$width =74.5;
		$text = ('NIK. '.$d['nik_mgr'].'');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);
	}
}



$pdf->Output();//('newpdf.pdf', 'D'); 
ob_end_flush();
?>