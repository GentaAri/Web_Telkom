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
					   ->setTitle("Data Telkom")
					   ->setSubject("Telkom Operation")
					   ->setDescription("Laporan Semua Data Karyawan Telkom")
					   ->setKeywords("Data Telkom");

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

$excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Karyawan Telkom"); // Set kolom A1 dengan tulisan "DATA SISWA"
$excel->getActiveSheet()->mergeCells('A1:AY1'); // Set Merge Cell pada kolom A1 sampai F1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1

// Buat header tabel nya pada baris ke 3
$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
$excel->setActiveSheetIndex(0)->setCellValue('B3', "NIK"); // Set kolom A3 dengan tulisan "NO"
$excel->setActiveSheetIndex(0)->setCellValue('C3', "NAMA"); // Set kolom B3 dengan tulisan "NIS"
$excel->setActiveSheetIndex(0)->setCellValue('D3', "TANGGAL LAHIR"); // Set kolom C3 dengan tulisan "NAMA"
$excel->setActiveSheetIndex(0)->setCellValue('E3', "KOTA LAHIR"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
$excel->setActiveSheetIndex(0)->setCellValue('F3', "AGAMA"); // Set kolom E3 dengan tulisan "TELEPON"
$excel->setActiveSheetIndex(0)->setCellValue('G3', "JENIS KELAMIN"); // Set kolom F3 dengan tulisan "ALAMAT"
$excel->setActiveSheetIndex(0)->setCellValue('H3', "JALAN");
$excel->setActiveSheetIndex(0)->setCellValue('I3', "KOTA");
$excel->setActiveSheetIndex(0)->setCellValue('J3', "SUKU");
$excel->setActiveSheetIndex(0)->setCellValue('K3', "NO KTP");
$excel->setActiveSheetIndex(0)->setCellValue('L3', "TANGGAL KTP");
$excel->setActiveSheetIndex(0)->setCellValue('M3', "NO KK");
$excel->setActiveSheetIndex(0)->setCellValue('N3', "NO NPWP");
$excel->setActiveSheetIndex(0)->setCellValue('O3', "NO GSM");
$excel->setActiveSheetIndex(0)->setCellValue('P3', "EMAIL");
$excel->setActiveSheetIndex(0)->setCellValue('Q3', "NAMA IBU");
$excel->setActiveSheetIndex(0)->setCellValue('R3', "GOLONGAN DARAH");
$excel->setActiveSheetIndex(0)->setCellValue('S3', "NO BPJS KESEHATAN");
$excel->setActiveSheetIndex(0)->setCellValue('T3', "NO BPJS KETENAGAKERJAAN");
$excel->setActiveSheetIndex(0)->setCellValue('U3', "KODE FASKES");
$excel->setActiveSheetIndex(0)->setCellValue('V3', "KODE FASKES GIGI");
$excel->setActiveSheetIndex(0)->setCellValue('W3', "STATUS PERNIKAHAN");
$excel->setActiveSheetIndex(0)->setCellValue('X3', "TANGGAL PERNIKAHAN");
$excel->setActiveSheetIndex(0)->setCellValue('Y3', "JUMLAH ANAK");
$excel->setActiveSheetIndex(0)->setCellValue('Z3', "SUSUNAN KELUARGA");
$excel->setActiveSheetIndex(0)->setCellValue('AA3', "LOKASI");
$excel->setActiveSheetIndex(0)->setCellValue('AB3', "LOKER");
$excel->setActiveSheetIndex(0)->setCellValue('AC3', "STO");
$excel->setActiveSheetIndex(0)->setCellValue('AD3', "POSITION NAME");
$excel->setActiveSheetIndex(0)->setCellValue('AE3', "POSITION TITLE");
$excel->setActiveSheetIndex(0)->setCellValue('AF3', "LEVEL");
$excel->setActiveSheetIndex(0)->setCellValue('AG3', "SUB UNIT");
$excel->setActiveSheetIndex(0)->setCellValue('AH3', "STATUS KERJA");
$excel->setActiveSheetIndex(0)->setCellValue('AI3', "TANGGAL MULAI BEKERJA");
$excel->setActiveSheetIndex(0)->setCellValue('AJ3', "TANGGAL AWAL KONTRAK");
$excel->setActiveSheetIndex(0)->setCellValue('AK3', "TANGGAL AKHIR KONTRAK");
$excel->setActiveSheetIndex(0)->setCellValue('AL3', "TAHUN KONTRAK");
$excel->setActiveSheetIndex(0)->setCellValue('AM3', "LEVEL PENDIDIKAN");
$excel->setActiveSheetIndex(0)->setCellValue('AN3', "TANGGAL LEVEL PENDIDIKAN");
$excel->setActiveSheetIndex(0)->setCellValue('AO3', "JURUSAN");
$excel->setActiveSheetIndex(0)->setCellValue('AP3', "PENYELENGGARA PENDIDIKAN");
$excel->setActiveSheetIndex(0)->setCellValue('AQ3', "NO REKENING");
$excel->setActiveSheetIndex(0)->setCellValue('AR3', "BANK");
$excel->setActiveSheetIndex(0)->setCellValue('AS3', "NAMA DI REKENING");
$excel->setActiveSheetIndex(0)->setCellValue('AT3', "NAMA AYAH");
$excel->setActiveSheetIndex(0)->setCellValue('AU3', "JENIS BAJU");
$excel->setActiveSheetIndex(0)->setCellValue('AV3', "UKURAN BAJU");
$excel->setActiveSheetIndex(0)->setCellValue('AW3', "UKURAN CELANA");
$excel->setActiveSheetIndex(0)->setCellValue('AX3', "UKURAN SEPATU");
$excel->setActiveSheetIndex(0)->setCellValue('AY3', "MITRA KERJA");


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
$excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('X3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Y3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('Z3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AA3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AB3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AC3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AD3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AE3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AF3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AG3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AH3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AI3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AJ3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AK3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AL3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AM3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AN3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AO3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AP3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AQ3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AR3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AS3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AT3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AU3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AV3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AW3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AX3')->applyFromArray($style_col);
$excel->getActiveSheet()->getStyle('AY3')->applyFromArray($style_col);


// Set height baris ke 1, 2 dan 3
$excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
$excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);

// Buat query untuk menampilkan semua data siswa
$sql = $pdo->prepare("SELECT * FROM tb_karyawan_telkom_akses");
$sql->execute(); // Eksekusi querynya

$no = 1; // Untuk penomoran tabel, di awal set dengan 1
$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
	$excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
	$excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data['nik']);
	$excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data['nama']);
	$excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data['tanggal_lahir']);
	$excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data['kota_lahir']);
	$excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data['agama']);
	$excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data['jenis_kelamin']);
	$excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data['jalan']);
	$excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data['kota']);
	$excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data['suku']);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('K'.$numrow, $data['no_ktp'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data['tanggal_ktp']);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('M'.$numrow, $data['no_kk'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('N'.$numrow, $data['no_npwp'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('O'.$numrow, $data['no_gsm'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data['email']);
	$excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data['nama_ibu_kandung']);
	$excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, $data['golongan_darah']);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('S'.$numrow, $data['no_bpjs_kesehatan'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('T'.$numrow, $data['no_bpjs_ketenagakerjaan'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('U'.$numrow, $data['kode_faskes'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('V'.$numrow, $data['kode_faskes_gigi'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data['status_pernikahan']);
	$excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, $data['tanggal_pernikahan']);
	$excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, $data['jumlah_anak']);
	$excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, $data['susunan_keluarga']);
	$excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, $data['lokasi']);
	$excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $data['loker']);
	$excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, $data['sto']);
	$excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $data['position_name']);
	$excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $data['position_title']);
	$excel->setActiveSheetIndex(0)->setCellValue('AF'.$numrow, $data['level']);
	$excel->setActiveSheetIndex(0)->setCellValue('AG'.$numrow, $data['sub_unit']);
	$excel->setActiveSheetIndex(0)->setCellValue('AH'.$numrow, $data['status_kerja']);
	$excel->setActiveSheetIndex(0)->setCellValue('AI'.$numrow, $data['tanggal_mulai_bekerja']);
	$excel->setActiveSheetIndex(0)->setCellValue('AJ'.$numrow, $data['tanggal_awal_kontrak']);
	$excel->setActiveSheetIndex(0)->setCellValue('AK'.$numrow, $data['tanggal_akhir_kontrak']);
	$excel->setActiveSheetIndex(0)->setCellValue('AL'.$numrow, $data['tahun_kontrak']);
	$excel->setActiveSheetIndex(0)->setCellValue('AM'.$numrow, $data['level_pendidikan']);
	$excel->setActiveSheetIndex(0)->setCellValue('AN'.$numrow, $data['tanggal_level_pendidikan']);
	$excel->setActiveSheetIndex(0)->setCellValue('AO'.$numrow, $data['jurusan']);
	$excel->setActiveSheetIndex(0)->setCellValue('AP'.$numrow, $data['penyelenggara_pendidikan']);
	$excel->setActiveSheetIndex(0)->setCellValueExplicit('AQ'.$numrow, $data['no_rekening'], PHPExcel_Cell_DataType::TYPE_STRING);
	$excel->setActiveSheetIndex(0)->setCellValue('AR'.$numrow, $data['bank']);
	$excel->setActiveSheetIndex(0)->setCellValue('AS'.$numrow, $data['nama_di_rekening']);
	$excel->setActiveSheetIndex(0)->setCellValue('AT'.$numrow, $data['nama_ayah']);
	$excel->setActiveSheetIndex(0)->setCellValue('AU'.$numrow, $data['jenis_baju']);
	$excel->setActiveSheetIndex(0)->setCellValue('AV'.$numrow, $data['ukuran_baju']);
	$excel->setActiveSheetIndex(0)->setCellValue('AW'.$numrow, $data['ukuran_celana']);
	$excel->setActiveSheetIndex(0)->setCellValue('AX'.$numrow, $data['ukuran_sepatu']);
	$excel->setActiveSheetIndex(0)->setCellValue('AY'.$numrow, $data['mitra_kerja']);


	
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
	$excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AE'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AF'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AG'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AH'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AI'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AJ'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AK'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AL'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AM'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AN'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AO'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AP'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AQ'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AR'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AS'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AT'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AU'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AV'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AW'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AX'.$numrow)->applyFromArray($style_row);
	$excel->getActiveSheet()->getStyle('AY'.$numrow)->applyFromArray($style_row);



	
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
$excel->getActiveSheet()->getColumnDimension('O')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('P')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('Q')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('R')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('S')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('T')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('U')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('V')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('W')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('X')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('Y')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('Z')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AA')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AB')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AC')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AD')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AE')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AF')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AG')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AH')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AI')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AJ')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AK')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AL')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AM')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AN')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AO')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AP')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AQ')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AR')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AS')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AT')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AU')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AV')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AW')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AX')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('AY')->setWidth(15);


// Set orientasi kertas jadi LANDSCAPE
$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

// Set judul file excel nya
$excel->getActiveSheet(0)->setTitle("Data Telkom");
$excel->setActiveSheetIndex(0);

// Proses file excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Data Telkom.xlsx"'); // Set nama file excel nya
header('Cache-Control: max-age=0');

$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$write->save('php://output');
?>
