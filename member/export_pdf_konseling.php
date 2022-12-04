<?php 
include '../include/koneksi.php';

use setasign\Fpdi\Fpdi;
require_once '../vendor/setasign/fpdf/fpdf.php' ;
require_once '../vendor/setasign/fpdi/src/autoload.php' ;

//require '../vendor/setasign/fpdf/fpdf.php';
//require '../vendor/setasign/fpdi/src/fpdi.php';
ob_start();
// initiate FPDI 
$pdf = new FPDI(); 
// add a page 
$pdf->AddPage(); 
// set the sourcefile 
$pdf->setSourceFile('../template/template_ekonseling.pdf'); 
// import page 1 
$tplIdx = $pdf->importPage(1); 
// use the imported page as the template 
$pdf->useTemplate($tplIdx, 0, 0); 

// text font & color
$pdf->AddFont('Gadugi','','gadugi.php');
$pdf->SetFont('Gadugi','',9);
$pdf->SetTextColor(0,0,0); 

if($_GET['act']== 'pdfKonseling'){
$id = $_GET["id"];
$sql = "SELECT * FROM tb_konseling WHERE id = '$id'";
$data = $koneksi->query($sql);
setlocale(LC_ALL, 'id-ID', 'id_ID');
while($d =$data->fetch_assoc()){
$date=$d['tanggal'];

//konselor
$pdf->SetXY(64, 64.7);
$line_height = 2.5;
$width = 160;
$text = ($d['nama_konselor']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetXY(64, 70);
$line_height = 2.5;
$width = 160;
$text = ($d['jabatan_konselor']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetXY(64, 75.3);
$line_height = 2.5;
$width = 160;
$text = ("Your text goes here");    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

//konseling
$pdf->SetXY(64, 86);
$line_height = 2.5;
$width = 160;
$text = ($d['nama_konseling']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetXY(64, 91.3);
$line_height = 2.5;
$width = 160;
$text = ($d['jabatan_konseling']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetXY(64, 96.6);
$line_height = 2.5;
$width = 160;
$text = ($d['lokasi_kerja_konseling']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

//tanggal
$pdf->SetXY(30, 106.6);
$line_height = 4;
$width = 160;
$text = ('Pada hari ini, Hari '.strftime("%A, %d %B %Y", strtotime($date)).' telah dilaksanakan dengan benar keterangan sebagai berikut :');    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

//permasalahan
$pdf->SetXY(30, 122);
$line_height = 2.5;
$width = 159;
$text = ($d['permasalahan']);
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

//tanggapan
$pdf->SetXY(30, 143);
$line_height = 2.5;
$width = 159;
$text = ($d['tanggapan_terhadap_permasalahan']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

//usulan
$pdf->SetXY(30, 164.4);
$line_height = 2.5;
$width = 159;
$text = ($d['usulan']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);
}

}


$pdf->Output();//('newpdf.pdf', 'D'); 
ob_end_flush();
?>