<?php 
include '../template/headerMember.php';
?>
<h1 class="mt-4">Karyawan Telkom Akses</h1>

<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead>
                   <tr>
                     <th>No</th>
                     <th>Nik</th>
                     <th>Nama</th>
                     <th>Tanggal Lahir</th>
                     <th>Kota Lahir</th>
                     <th>Agama</th>
                     <th>Jenis Kelamin</th>
                     <th>Jalan</th>
                     <th>Kota</th>
                     <th>Suku</th>
                     <th>No.KTP</th>
                     <th>Tanggal KTP</th>
                     <th>No.KK</th>
                     <th>No.NPWP</th>
                     <th>No.GSM</th>
                     <th>Email</th>
                     <th>Nama Ibu Kandung</th>
                     <th>Golongan Darah</th>
                     <th>No BPJS Kesehatan</th>
                     <th>No BPJS Ketenagakerjaan</th>
                     <th>Kode Fakes</th>
                     <th>Kode Fakes Gigi</th>
                     <th>Status Pernikahan</th>
                     <th>Tanggal Pernikahan</th>
                     <th>Jumlah Anak</th>
                     <th>Susunan Keluarga</th>
                     <th>Lokasi</th>
                     <th>Loker</th>
                     <th>STO</th>
                     <th>Position Name</th>
                     <th>Position Title</th>
                     <th>Level</th>
                     <th>Sub Unit</th>
                     <th>Status Kerja</th>
                     <th>Tanggal Mulai Kerja</th>
                     <th>Tanggal Awal Kontrak</th>
                     <th>Tanggal Akhir Kontrak</th>
                     <th>Tahun Kontrak</th>
                     <th>Level Pendidikan</th>
                     <th>Tanggal Level Pendidikan</th>
                     <th>Jurusan</th>
                     <th>Penyelenggara Pendidikan</th>
                     <th>No REkening</th>
                     <th>Bank</th>
                     <th>Nama di Rekening</th>
                     <th>Nama Ayah</th>
                     <th>Jenis Baju</th>
                     <th>Ukuran Baju</th>
                     <th>Ukuran Celana</th>
                     <th>Ukuran Sepatu</th>
                     <th>Mitra Kerja</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT * FROM tb_karyawan_telkom_akses";
                    $no =1;
                    $data = $koneksi->query($sql);
                    while($d =$data->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $d['nik']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['tanggal_lahir']; ?></td>
                        <td><?php echo $d['kota_lahir']; ?></td>
                        <td><?php echo $d['agama']; ?></td>
                        <td><?php echo $d['jenis_kelamin']; ?></td>
                        <td><?php echo $d['jalan']; ?></td>
                        <td><?php echo $d['kota']; ?></td>
                        <td><?php echo $d['suku']; ?></td>
                        <td><?php echo $d['no_ktp']; ?></td>
                        <td><?php echo $d['tanggal_ktp']; ?></td>
                        <td><?php echo $d['no_kk']; ?></td>
                        <td><?php echo $d['no_npwp']; ?></td>
                        <td><?php echo $d['no_gsm']; ?></td>
                        <td><?php echo $d['email']; ?></td>
                        <td><?php echo $d['nama_ibu_kandung']; ?></td>
                        <td><?php echo $d['golongan_darah']; ?></td>
                        <td><?php echo $d['no_bpjs_kesehatan']; ?></td>
                        <td><?php echo $d['no_bpjs_ketenagakerjaan']; ?></td>
                        <td><?php echo $d['kode_faskes']; ?></td>
                        <td><?php echo $d['kode_faskes_gigi']; ?></td>
                        <td><?php echo $d['status_pernikahan']; ?></td>
                        <td><?php echo $d['tanggal_pernikahan']; ?></td>
                        <td><?php echo $d['jumlah_anak']; ?></td>
                        <td><?php echo $d['susunan_keluarga']; ?></td>
                        <td><?php echo $d['lokasi']; ?></td>
                        <td><?php echo $d['loker']; ?></td>
                        <td><?php echo $d['sto']; ?></td>
                        <td><?php echo $d['position_name']; ?></td>
                        <td><?php echo $d['position_title']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                        <td><?php echo $d['sub_unit']; ?></td>
                        <td><?php echo $d['status_kerja']; ?></td>
                        <td><?php echo $d['tanggal_mulai_bekerja']; ?></td>
                        <td><?php echo $d['tanggal_awal_kontrak']; ?></td>
                        <td><?php echo $d['tanggal_akhir_kontrak']; ?></td>
                        <td><?php echo $d['tahun_kontrak']; ?></td>
                        <td><?php echo $d['level_pendidikan']; ?></td>
                        <td><?php echo $d['tanggal_level_pendidikan']; ?></td>
                        <td><?php echo $d['jurusan']; ?></td>
                        <td><?php echo $d['penyelenggara_pendidikan']; ?></td>
                        <td><?php echo $d['no_rekening']; ?></td>
                        <td><?php echo $d['bank']; ?></td>
                        <td><?php echo $d['nama_di_rekening']; ?></td>
                        <td><?php echo $d['nama_ayah']; ?></td>
                        <td><?php echo $d['jenis_baju']; ?></td>
                        <td><?php echo $d['ukuran_baju']; ?></td>
                        <td><?php echo $d['ukuran_celana']; ?></td>
                        <td><?php echo $d['ukuran_sepatu']; ?></td>
                        <td><?php echo $d['mitra_kerja']; ?></td>
                    </tr>
                      <?php } ?>
                </tbody>
            </table>
        </div>
<?php 
include '../template/footer.php';
?>