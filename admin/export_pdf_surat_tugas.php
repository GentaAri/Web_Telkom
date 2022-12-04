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
$pdf->setSourceFile('../template/template_surat_tugas_spbu.pdf'); 
// import page 1 
$tplIdx = $pdf->importPage(1); 
// use the imported page as the template 
$pdf->useTemplate($tplIdx, 0, 0); 

// text font & color
$pdf->AddFont('Gadugi','','gadugi.php');
$pdf->SetFont('Gadugi','',9);
$pdf->SetTextColor(0,0,0); 

$sql = "SELECT * FROM tb_print where id=1";
$data = $koneksi->query($sql);
setlocale(LC_ALL, 'id-ID', 'id_ID');
while($d =$data->fetch_assoc()){
		//nama_mgr
		$pdf->SetXY(44, 63);
		$line_height = 2.5;
		$width = 140;
		$text = ($d['nama_mgr']);    
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		//nik_mgr
		$pdf->SetXY( 44, 68.2);
		$line_height = 2.5;
		$width =  140;
		$text = ($d['nik_mgr']);    
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		//jabatan_mgr
		$pdf->SetXY(44, 73.4);
		$line_height = 2.5;
		$width =  140;
		$text = ($d['jabatan_mgr']);     
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);
}
		//tabel
		$pdf->AddFont('Gadugi','B','gadugib.php');
		$pdf->SetFont('Gadugi','B',9);
		$pdf->SetFillColor(120,120,120);
		$pdf->SetTextColor(255,255,255);
		$pdf->SetXY(25,103);
		$pdf->Cell(46.6, 7.5, 'NAMA', 1, 0, 'C',1);
		$pdf->Cell(21, 7.5, 'NIK', 1, 0, 'C',1);
		$pdf->Cell(59, 7.5, 'JABATAN', 1, 0, 'C',1);
		$pdf->Cell(32, 7.5, 'UNIT KERJA', 1, 1, 'C',1);

$no=1;
$query=mysqli_query($koneksi, "select * from tb_print");
while($d=mysqli_fetch_array($query)){
		$pdf->SetFont('Gadugi','',9);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetX(25);
		$line_height = 3.5;
		$width = 46.6;
//ukuran font sebelum auto-shrink
$x = 9;
//mengurangi ukuran font sampai lebih kecil dari max width
while( $pdf->GetStringWidth( $d['nama'] ) > 45 ){
    $x-=0.1;   //mengurangi ukuran font sebanyak 0.1
    $pdf->SetFont( 'Gadugi', '', $x );  // Set the new font size
}
//output string dengan ukuran font yg baru
$pdf->Cell( 46.6, 5.5,$d['nama'],1,0,'L');
//mengembalikan ukuran font kesemula untuk baris selanjutnya
$pdf->SetFont( 'Gadugi', '', 9 );
		
		$pdf->Cell(21, 5.5, $d['nik'], 1, 0,'C');

while( $pdf->GetStringWidth($d['jabatan']) > 59 ){
    $x--;
    $pdf->SetFont( 'Gadugi', '', $x );
}
		$pdf->Cell(59, 5.5, $d['jabatan'],1, 0, 'L');

$pdf->SetFont( 'Gadugi', '', 9 );		
		$pdf->Cell(32, 5.5, "TA Sumbagsel",1, 1, 'C');
			$no++;
}
$pdf->MultiCell(158.6,5,' ',0);

$pdf->AddFont('Gadugi','B','gadugib.php');
		$pdf->SetFont('Gadugi','B',9);
		$pdf->SetFillColor(120,120,120);
		$pdf->SetTextColor(255,255,255);
		$pdf->SetX(25);
		$pdf->Cell(46.6, 7.5, 'ID SPBU', 1, 0, 'C',1);
		$pdf->Cell(80, 7.5, 'ALAMAT SPBU', 1, 0, 'C',1);
		$pdf->Cell(32, 7.5, 'KOTA', 1, 1, 'C',1);

$query=mysqli_query($koneksi, "select * from tb_print where id=1");

while($d=mysqli_fetch_array($query)){
		$pdf->SetFont('Gadugi','',9);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetX(25);
		$line_height = 3.5;
		$width = 46.6;

$x = 9;
		
		$pdf->SetFont('Gadugi','',9);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetX(25);
		$line_height = 3.5;
		$width = 46.6;

		$pdf->Cell( 46.6, 5.5,$d['id_spbu'],1,0,'C');
		$x=9;
while( $pdf->GetStringWidth($d['alamat']) > 80 ){
    $x--;
    $pdf->SetFont( 'Gadugi', '', $x );
}
		$pdf->Cell(80, 5.5, $d['alamat'],1, 0, 'L');

$pdf->SetFont( 'Gadugi', '', 9 );		
		$pdf->Cell(32, 5.5, $d['kota'],1, 1, 'L');
}

$pdf->MultiCell(158.6,5,' ',0);

$sql = "SELECT * FROM tb_print where id=1";
$data = $koneksi->query($sql);
setlocale(LC_ALL, 'id-ID', 'id_ID');
while($d =$data->fetch_assoc()){
		 $date1=$d['tanggal_mulai'];
		 $date2=$d['tanggal_selesai'];

		//p1
		$pdf->SetX(24);
		$line_height =2;
		$width =159.7;
		$text = ('Terhitung mulai '.strftime("%A, %d %B %Y", strtotime($date1)).', saudara ditugaskan sebagai PIC untuk melaksanakan '.$d['penugasan'].'');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"J");

$pdf->MultiCell(158.6,5,' ',0);

		//p2
		$pdf->SetX(24);
		$line_height = 2;
		$width =149.5;
		$text = ('Surat tugas ini berlaku sejak '.strftime("%A, %d %B %Y", strtotime($date1)).' s/d '.strftime("%A, %d %B %Y", strtotime($date2)).', dan sewaktu - waktu dapat ditinjau ulang sesuai kebutuhan dan peruntukannya.');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,"J");

$pdf->MultiCell(158.6,5,' ',0);
$pdf->MultiCell(158.6,5,' ',0);

		$pdf->SetX(24);
		$pdf->MultiCell(158.6,5,'Demikian surat ini dibuat agar dapat dipergunakan dengan penuh tanggung jawab.',0);
		
$pdf->MultiCell(158.6,5,' ',0);
$pdf->MultiCell(158.6,5,' ',0);

		//tempat_tanggal
		$pdf->SetX(24);
		$line_height = 2;
		$width =74.5;
		$text = ('Bandar Lampung, '.strftime("%A, %d %B %Y", strtotime($date1)).'');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		$pdf->SetFont('Gadugi','B',9);
		
		$pdf->MultiCell(158.6,2,'',0);
		
		//jabatan_mgr
		$pdf->SetX(24);
		$line_height = 2.5;
		$width =  140;
		$text = ($d['jabatan_mgr']);     
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		$pdf->MultiCell(158.6,5,'',0);
		$pdf->MultiCell(158.6,5,'',0);
		$pdf->MultiCell(158.6,5,'',0);

		$pdf->SetFont('Gadugi','UB',9);

		//nama_mgr_ttd
		$pdf->SetX(24);
		$line_height = 2.3;
		$width =74.5;
		$text = ($d['nama_mgr']);
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

		$pdf->SetFont('Gadugi','B',9);
		
		$pdf->MultiCell(158.6,2,' ',0);

		//nik_mgr_ttd
		$pdf->SetX(24);
		$line_height = 2.3;
		$width =74.5;
		$text = ('NIK. '.$d['nik_mgr'].'');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetFont( 'Gadugi', 'B', 7 );
$pdf->SetTextColor(255,0,0);
		$pdf->SetXY(24.7, 262.4);
		$line_height = 2.3;
		$width =74.5;
		$text = ('PT. TELKOM AKSES LAMPUNG');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetFont( 'Gadugi', '', 7 );
$pdf->SetTextColor(0,0,0);
		$pdf->SetXY(24.7, 266.4);
		$line_height = 2.3;
		$width =74.5;
		$text = ('Jl. Sultan Haji No. 01 Sepang Jaya, Kedaton, Bandar Lampung');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetFont( 'Gadugi', '', 7 );
$pdf->SetTextColor(255,0,0);
		$pdf->SetXY(24.7, 270.4);
		$line_height = 2.3;
		$width =74.5;
		$text = ('www.telkomakses.co.id');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

$pdf->SetFont( 'Gadugi', '', 7 );
$pdf->SetTextColor(0,0,0);
		$pdf->SetXY(24.7, 274.4);
		$line_height = 2.3;
		$width =74.5;
		$text = ('Telp. (0721) 5610240');
		$height = (ceil(($pdf->GetStringWidth($text) / $width)) * $line_height);
		$pdf->Multicell($width,$height,$text,0,1);

}
$pdf->Output('Surat Tugas SPBU.pdf', 'I');
$query=mysqli_query($koneksi, "TRUNCATE TABLE tb_print");
ob_end_flush();
?>