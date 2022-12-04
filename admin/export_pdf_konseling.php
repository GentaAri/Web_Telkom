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
$pdf->SetXY(59, 69.9);
$line_height = 2.5;
$width = 85;
$text = ($d['nama_konselor']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetXY(59, 75.3);
$line_height = 2.5;
$width = 85;
$text = ($d['jabatan_konselor']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetXY(59, 80.5);
$line_height = 2.5;
$width = 85;
$text = ('Witel Lampung');    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

//konseling
$pdf->SetXY(59, 91.2);
$line_height = 2.5;
$width = 85;
$text = ($d['nama_konseling']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetXY(59, 96.7);
$line_height = 2.5;
$width = 85;
$text = ($d['jabatan_konseling']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetXY(59, 102);
$line_height = 2.5;
$width = 85;
$text = ("Witel Lampung");    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

//tanggal
$pdf->SetXY(24.5, 111.6);
$line_height = 4;
$width = 148;
$text = ('Pada hari ini, Hari '.strftime("%A, %d %B %Y", strtotime($date)).' telah dilaksanakan dengan benar keterangan sebagai berikut :');    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,1);

//permasalahan
$pdf->SetXY(24.5, 127.5);
$line_height = 2.5;
$width = 160.5;
$text = ($d['permasalahan']);
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

//tanggapan
$pdf->SetXY(24.5, 148.5);
$line_height = 2.5;
$width = 160.5;
$text = ($d['tanggapan_terhadap_permasalahan']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

//usulan
$pdf->SetXY(24.5, 169.5);
$line_height = 2.5;
$width = 160.5;
$text = ($d['usulan']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");
}

}


$pdf->Output('Konseling.pdf', 'I'); 
ob_end_flush();
?>