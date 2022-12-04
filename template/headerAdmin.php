<?php 
    include "../include/koneksi.php";
    session_start();
    $timeout = 60; 
    $logout = "../index.php"; 
 
    $timeout = $timeout * 60; 
    if(isset($_SESSION['start_session'])){
        $elapsed_time = time()-$_SESSION['start_session'];
        if($elapsed_time >= $timeout){
            session_destroy();
            echo "<script type='text/javascript'>alert('Sesi telah berakhir');window.location='$logout'</script>";
        }
    }
 
    $_SESSION['start_session']=time();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aplikasi Web</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap-datepicker3.min" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/datepicker.css">
        <script src="../js/bootstrap.js"></script>
        <script src="../js/jquery.js"></script>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script> -->
        <script src="../js/font-awesome/all.js"></script>
        <link rel="stylesheet" href="../css/all.css">


            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Telkom Akses</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="user.php">User</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- sidebar -->
        <div id="layoutSidenav" >
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu" style="font-size: 14px;">
							<div class="nav">
							    <div class="sb-sidenav-menu-heading"></div>
							    
							    <li class="nav-item">
							        <a class="nav-link" href="index.php"
							        ><div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
							        Beranda</a>
							    </li>

                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Arsip
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="foto.php">Foto</a>
                                            <a class="nav-link" href="kk.php">KK</a>
                                            <a class="nav-link" href="ktp.php">KTP</a>
                                            <a class="nav-link" href="npwp.php">NPWP</a>
                                            <a class="nav-link" href="ijazah.php">Ijazah</a>
                                            <a class="nav-link" href="buku_nikah.php">Buku Nikah</a>
                                            <a class="nav-link" href="sk_posisi.php">SK Posisi</a>
                                            <a class="nav-link" href="exit_clearance.php">Exit Clearance</a>
                                            <a class="nav-link" href="buku_rekening.php">Buku Rekening</a>
                                        </nav>
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                BPJS
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="bpjs_kesehatan.php">BPJS Kesehatan</a>
                                                    <a class="nav-link" href="bpjs_ketenagakerjaan.php">BPJS Keternagakerjaan</a>
                                                </nav>
                                            </div>
                                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                                Konseling dna SP
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="arsip_konseling.php">Konseling</a>
                                                    <a class="nav-link" href="sp.php">SP</a>
                                                </nav>
                                            </div>
                                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pages2" aria-expanded="false" aria-controls="pages2">
                                                SKR dan SPBJ
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pages2" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="skr.php">SKR</a>
                                                    <a class="nav-link" href="spbj.php">SPBJ</a>
                                                </nav>
                                            </div>
                                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pages3" aria-expanded="false" aria-controls="pages3">
                                                UMP dan UMK
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pages3" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="ump.php">UMP</a>
                                                    <a class="nav-link" href="umk.php">UMK</a>
                                                </nav>
                                            </div>
                                        </nav>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#db_karyawan" aria-expanded="false" aria-controls="collapseData">

                                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i>
                                        </div>Database Karyawan<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="db_karyawan" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="karyawan_telkom.php">Telkom Akses</a>
                                            <a class="nav-link" href="karyawan_mitra.php">Mitra Operation</a>
                                        </nav>
                                </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="kontrak.php"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                                    Data Kontrak</a
                                >
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="prakerin.php"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                                    Data Prakerin</a
                                >
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#db_tugas" aria-expanded="false" aria-controls="collapseData">

                                        <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i>
                                        </div>E-Surat<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="db_tugas" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="surat.php">Surat Tugas SPBU</a>
                                            <a class="nav-link" href="surat_opr.php">Surat Tugas</a>
                                            <a class="nav-link" href="surat_teguran.php">Surat Teguran</a>
                                            <a class="nav-link" href="konseling.php">E-Konseling</a>
                                        </nav>
                                    </div>
                                </li>                                

                                <li class="nav-item">
                                     <a class="nav-link" href="mapping.php"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-map"></i></div>
                                    Mapping</a
                                >
                                </li>


                                <li class="nav-item">
                                     <a class="nav-link" href="posko.php"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                    Posko</a
                                >
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#db_presensi" aria-expanded="false" aria-controls="collapseData">

                                        <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i>
                                        </div>Presensi<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="db_presensi" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="presensi.php">Presensi Harian</a>
                                            <a class="nav-link" href="surat_sakit.php">Report Surat Sakit</a>
                                        </nav>
                                </div>
                                </li>
                                
                                
                                <li class="nav-item">
                                     <a class="nav-link" href="user.php"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                    User</a
                                >
                                </li>
							</div>
							</div>



                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: <?php echo $_SESSION['username']?></div>
                        
                        <!-- user login -->


                    </div>
                </nav>
            </div>
            <!-- siderbar end -->
            <div id="layoutSidenav_content" class="bg-light">
                <main>
                    <div class="container-fluid">