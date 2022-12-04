<?php 
include '../template/headerAdmin.php';
?>
<div class="mb-4">
    <div>
         <h1 class="mt-4"></h1>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-address-card mr-1"></i>Detail Kontrak</div>
    <div class="card-body">
        <table>             
                <?php 
                $id = $_GET['id'];
                $sql = "SELECT * FROM tb_kontrak WHERE id='$id'";
                $no =1;
                $data = $koneksi->query($sql);
                while($d =$data->fetch_assoc()){ ?>
                <tr>
                    <td>
                        NIK 
                    </td>
                    <td>: <?php echo $d['nik']; ?></td>
                </tr>
                <tr>
                    <td>
                        NAMA 
                    </td>
                    <td>: <?php echo $d['nama']; ?></td>
                </tr>
                <tr>
                    <td>
                        POSITION NAME
                    </td>
                    <td>: <?php echo $d['position_name']; ?></td>
                </tr>
                <tr>
                    <td>
                        POSITION TITLE
                    </td>
                    <td>: <?php echo $d['position_title']; ?></td>
                </tr>
                <tr>
                    <td>
                        WITEL
                    </td>
                    <td>: <?php echo $d['witel']; ?></td>
                </tr>
                <tr>
                    <td>
                        LOKER
                    </td>
                    <td>: <?php echo $d['loker']; ?></td>
                </tr>
                <tr>
                    <td>
                        STO
                    </td>
                    <td>: <?php echo $d['sto']; ?></td>
                </tr>
                <tr>
                    <td>
                        LEVEL
                    </td>
                    <td>: <?php echo $d['level']; ?></td>
                </tr>
                <tr>
                    <td>
                        SUB UNIT
                    </td>
                    <td>: <?php echo $d['sub_unit']; ?></td>
                </tr>
                <tr>
                    <td>
                        STATUS KERJA
                    </td>
                    <td>: <?php echo $d['status_kerja']; ?></td>
                </tr>
                <tr>
                    <td>
                        TANGGAL MULAI KERJA
                    </td>
                    <td>: <?php echo $d['tanggal_mulai_kerja']; ?></td> 
                </tr>
                <tr>
                    <td>
                        TANGGAL AWAL KONTRAK
                    </td>
                    <td>: <?php echo $d['tanggal_awal_kontrak']; ?></td>
                </tr>
                <tr>
                    <td>
                        TANGGAL AKHIR KONTRAK
                    </td>
                    <td>: <?php echo $d['tanggal_akhir_kontrak']; ?></td>
                </tr>
                <tr>
                    <td>
                        NOMOR KONTRAK
                    </td>
                    <td>: <?php echo $d['nomor_kontrak']; ?></td>
                </tr>
                <tr>
                    <td>
                        KONTRAK KE
                    </td>
                    <td>: <?php echo $d['kontrak_ke']; ?></td>
                </tr>
                <tr>
                    <td>
                        MITRA KERJA
                    </td>
                    <td>: <?php echo $d['mitra_kerja']; ?></td>
                </tr>
                
                </table>
        
    </div>
</div>

<div class="card mb-4">
        <div class="table-responsive">
	             <div class="card-header"><i class="fas fa-table mr-1"></i>DATA SURAT</div>
    			<div class="card-body">
	            <table class="table table-bordered" width="100%" cellspacing="0" style="font-size:12px">
                <thead>
                	<tr>
                		<th>PM</th>
                		<TH>K1 TA</TH>
                		<TH>K2 TA</TH>
                		<TH>K3 TA</TH>
                		<TH>K1 KEMITRAAN</TH>
                		<TH>K2 KEMITRAAN</TH>
                		<TH>K3 KEMITRAAN</TH>
                		<TH>A1 KEMITRAAN</TH>
                		<TH>A2 KEMITRAAN</TH>
                		<TH>A3 KEMITRAAN</TH>
                	</tr>
                </thead>
                <tbody>
                	<td>
                		<a href="../file/<?php echo $d['upload_pm'];?>"><?php echo $d['upload_pm']?></a>
                	</td>
                	<!-- <embed width="600" height="450" src="../file/<?php echo $d['upload_pm'];?>" type="application/pdf"></embed> -->
                     <td>
                		<a href="../file/<?php echo $d['upload_k1_ta'];?>"><?php echo $d['upload_k1_ta']?></a>
                	</td>
                	<td>
                		<a href="../file/<?php echo $d['upload_k2_ta'];?>"><?php echo $d['upload_k2_ta']?></a>
                	</td>
                	<td>
                		<a href="../file/<?php echo $d['upload_k3_ta'];?>"><?php echo $d['upload_k3_ta']?></a>
                	</td>
                	<td>
                		<a href="../file/<?php echo $d['upload_k1_ins'];?>"><?php echo $d['upload_k1_ins']?></a>
                	</td>
                	<td>
                		<a href="../file/<?php echo $d['upload_k2_ins'];?>"><?php echo $d['upload_k2_ins']?></a>
                	</td>
                	<td>
                		<a href="../file/<?php echo $d['upload_k3_ins'];?>"><?php echo $d['upload_k3_ins']?></a>
                	</td>
                	<td>
                		<a href="../file/<?php echo $d['upload_a1_ins'];?>"><?php echo $d['upload_a1_ins']?></a>
                	</td>
                	<td>
                		<a href="../file/<?php echo $d['upload_a2_ins'];?>"><?php echo $d['upload_a2_ins']?></a>
                	</td>
                	<td>
                		<a href="../file/<?php echo $d['upload_a3_ins'];?>"><?php echo $d['upload_a3_ins']?></a>
                	</td>
                </tbody>
                <?php } ?>
            	</table>
            </div>
        </div>

    </div>
    <div>
        <a href="kontrak.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
    </div>


<?php 
include '../template/footer.php';
?>