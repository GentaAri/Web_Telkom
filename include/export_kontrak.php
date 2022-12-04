<?php
// Load file koneksi.php
include 'koneksi_2.php';

// Load plugin PHPExcel nya
require_once '../PHPExcel/PHPExcel.php';

// Panggil class PHPExcel nya
$excel = new PHPExcel();

// Settingan awal fil excel
$excel->getProperties()->setCreator('TelkomAksess')
					   ->setLastModifiedBy('TelkomAksess')
					   ->setTitle("Data Kontrak")
					   ->setSubject("Kontrak")
					   ->setDescription("Laporan Semua Data Kontrak")
					   ->setKeywords("Data Kontrak");

// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
$style_col = array(
	'font' => array('bold' => true), // Set font nya jadi bold
	'alignment' => array(
		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
		'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	),
	'borders' => array(
		'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
		'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
		'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
		'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	)
);

// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
$style_row = array(
	'alignment' => array(
		'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
	),
	'borders' => array(
		'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
		'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
		'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
		'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
	)
);

$excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Kontrak"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('A1:Q1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

// Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
$excel->setActiveSheetIndex(0)->setCellValue('B3', "NIK"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('D3', "POSITION NAME"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('E3', "POSITION TITLE"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('F3', "WITEL"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('G3', "LOKER"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('H3', "STO");
$excel->setActiveSheetIndex(0)->setCellValue('I3', "LEVEL");
$excel->setActiveSheetIndex(0)->setCellValue('J3', "SUB UNIT");
$excel->setActiveSheetIndex(0)->setCellValue('K3', "STATUS KERJA");
$excel->setActiveSheetIndex(0)->setCellValue('L3', "TANGGAL MULAI KERJA");
$excel->setActiveSheetIndex(0)->setCellValue('M3', "TANGGAL AWAL KONTRAK");
$excel->setActiveSheetIndex(0)->setCellValue('N3', "TANGGAL AKHIR KONTRAK");
$excel->setActiveSheetIndex(0)->setCellValue('O3', "NOMOR KONTRAK");
$excel->setActiveSheetIndex(0)->setCellValue('P3', "KONTRAK KE");
$excel->setActiveSheetIndex(0)->setCellValue('Q3', "MITRA KERJA");

// Apply style header yang telah kita buat tadi ke masing-masing kolom header
$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);

// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);

// Buat query untuk menampilkan semua data siswa
$sql = $pdo->prepare("SELECT * FROM tb_kontrak");
$sql->execute(); // Eksekusi querynya

$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['nik']);
	$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['position_name']);
	$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['position_title']);
	$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['witel']);
	$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['loker']);
	$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['sto']);
	$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data['level']);
	$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['sub_unit']);
	$excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data['status_kerja']);
	$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data['tanggal_mulai_kerja']);
	$excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data['tanggal_awal_kontrak']);
	$excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data['tanggal_akhir_kontrak']);
	$excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data['nomor_kontrak']);
	$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data['kontrak_ke']);
	$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data['mitra_kerja']);

	
	// Khusus untuk no telepon. kita set type kolom nya jadi STRING
	// $excel->setActiveSheetIndex(0)->setCellValueExplicit('E'.$numrow, $data['telp'], PHPExcel_Cell_DataType::TYPE_STRING);
	
	// $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['alamat']);
	
	// Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
	$excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
	
	$excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
	
	$no++; // Tambah 1 setiap kali looping
	$numrow++; // Tambah 1 setiap kali looping
}

// Set width kolom
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15); // Set width kolom E
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('I')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('J')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('K')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('L')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('M')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('N')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('O')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('P')->setWidth(15); // Set width kolom F
$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(15); // Set width kolom F


// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Data Kontrak");
$excel->setActiveSheetIndex(0);

// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Data Kontrak.xlsx"'); // Set nama file excel nya
header('Cache-Control: max-age=0');

$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$write->save('php://output');
?>
