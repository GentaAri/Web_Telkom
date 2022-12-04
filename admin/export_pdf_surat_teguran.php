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
$pdf->setSourceFile('../template/template_surat_teguran.pdf'); 
// import page 1 
$tplIdx = $pdf->importPage(1); 
// use the imported page as the template 
$pdf->useTemplate($tplIdx, 0, 0); 

// text font & color
$pdf->AddFont('Gadugi','','gadugi.php');
$pdf->SetFont('Gadugi','',8.5);
$pdf->SetTextColor(0,0,0); 

if($_GET['act']== 'pdfSuratteguran'){
$id = $_GET["id"];
$sql = "SELECT * FROM tb_surat_teguran WHERE id = '$id'";
$data = $koneksi->query($sql);
setlocale(LC_ALL, 'id-ID', 'id_ID');
while($d =$data->fetch_assoc()){
$date=$d['tanggal'];

//manager
$pdf->SetXY(54.3, 73.5);
$line_height = 2.5;
$width = 135;
$text = ($d['nama_mgr']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

$pdf->SetXY(54.3, 78.5);
$line_height = 2.5;
$width = 135;
$text = ($d['nik_mgr']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

$pdf->SetXY(54.3, 83.6);
$line_height = 2.5;
$width = 135;
$text = ($d['posisi_mgr']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

//karyawan
$pdf->SetXY(54.3, 104.3);
$line_height = 2.5;
$width = 135;
$text = ($d['nama_karyawan']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

$pdf->SetXY(54.3, 109.3);
$line_height = 2.5;
$width = 135;
$text = ($d['nik_karyawan']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

$pdf->SetXY(54.3, 114.8);
$line_height = 2.5;
$width = 135;
$text = ($d['posisi_karyawan']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

$pdf->SetXY(54.3, 119.7);
$line_height = 2.5;
$width = 135;
$text = ($d['sub_unit']);    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

$pdf->SetXY(31, 139.1);
$line_height = 2.5;
$width = 155;
$text = ('Benar atas nama '.$d['nama_karyawan'].' melakukan indisipliner berupa '.$d['permasalahan'].' sesuai dengan peraturan yang telah ditetapkan perusahaan.');    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

$pdf->SetXY(31, 149.5);
$line_height = 2.5;
$width = 155;
$text = ('Sesuai dengan ketentuan No. Kep : 1441/PHJSK-PK/PP/XI/2018 tentang Peraturan Perusahaan Pasal 53 terkait Pelanggaran Disiplin Tingkat I.');    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

$pdf->SetXY(30, 160.2);
$line_height = 1.6;
$width = 155;
$text = ('Demikian surat teguran ini dibuat dengan sebenarnya, dan apabila dikemudian hari melanggar peraturan yang ada, maka perusahaan akan mengeluarkan Surat Peringatan sesuai dengan Peraturan Perusahaan yang berlaku di PT. Telkom Akses');    
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

//tanggal
$pdf->SetXY(24.5, 187);
$line_height = 2.5;
$width = 68;
$text = ('Bandar Lampung, '.strftime("%d %B %Y", strtotime($date)).'');
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

//pos_mgr
$pdf->SetXY(24.5, 202.5);
$line_height = 2.5;
$width = 68;
$text = ($d['posisi_mgr']);
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");


//pos_pembuat
$pdf->SetXY(141.5, 202.5);
$line_height = 2.5;
$width = 47;
$text = ($d['posisi_pembuat']);
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");


$pdf->AddFont('Gadugi','B','gadugib.php');
$pdf->SetFont('Gadugi','BU',8.5);

//nama_mgr
$pdf->SetXY(24.5, 223);
$line_height = 2.5;
$width = 68;
$text = ($d['nama_mgr']);
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

//nama_pembuat
$pdf->SetXY(141.5, 223);
$line_height = 2.5;
$width = 47;
$text = ($d['nama_pembuat']);
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

$pdf->SetFont('Gadugi','',8.5);

//nik_mgr
$pdf->SetXY(24.5, 227.7);
$line_height = 2.5;
$width = 68;
$text = ($d['nik_mgr']);
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

//nik_pembuat
$pdf->SetXY(141.5, 227.7);
$line_height = 2.5;
$width = 68;
$text = ($d['nik_pembuat']);
$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
$pdf->Multicell($width,$height,$text,0,"J");

}

}


$pdf->Output('Surat Teguran.pdf', 'I'); 
ob_end_flush();
?>