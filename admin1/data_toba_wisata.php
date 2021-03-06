<?php require_once("../conn.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toba Wisata | Admin Toba Trans</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="index.php"><img src="../image/logo.png" width="220"></a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo date('l, d-m-Y'); ?> &nbsp; <a href="../logout.php" class="btn btn-success square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                        </li> -->
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Beranda</a>
                    </li>

                    <li>
                        <a class="active-menu" href="data_toba_wisata.php"><i class="fa fa-tree fa-3x"></i> Toba Wisata</a>
                    </li>
                     <li>
                        <a  href="data_lamaran_supir.php"><i class="fa fa-folder-open fa-3x"></i> Lamaran Supir</a>
                    </li>
                      <li>
                        <a  href="data_user.php"><i class="fa fa-user fa-3x"></i> Daftar Pengguna</a>
                    </li>
                     <li>
                        <a  href="data_supir.php"><i class="fa fa-user fa-3x"></i> Daftar Supir</a>
                    </li>
                    <li>
                        <a  href="data_tujuan.php"><i class="fa fa-exchange fa-3x"></i> Daftar Tujuan</a>
                        <ul class="nav nav-second-level">
                          <li>
                            <a href="data_tujuan_toba_wisata.php">Toba wisata</a>
                          </li>
                          <li>
                            <a href="data_tujuan.php">Toba Car</a>
                          </li>
                          
                        </ul>
                    </li>
                           <li  >
						   <li  >
                        <a  href="data_mobil.php"><i class="fa fa-taxi fa-3x"></i> Daftar Mobil</a>
                    </li>	
                      <li  >
                        <a  href="data_galeri.php"><i class="fa fa-picture-o fa-3x"></i> Daftar Galeri</a>
                    </li>
                    <li  >
                        <a  href="data_komentar.php"><i class="fa fa-comments fa-3x"></i> Daftar Komentar </a>
                    </li>				
                  	
                </ul>
               
            </div>
            
        </nav><!-- 

         body -->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="container">	
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Daftar Pengguna</h3>
                            <br>
                            <table class="table table-striped table-bordered table-hover">
                                <tr>
                                    <th>id</th>
                                    <th>Nama Pemesan
                                    </th>
                                    <th>Tujuan</th>
                                    <th>Total Harga</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Opsi</th>
                                </tr>
                                <?php 
                                $query2 = "SELECT * FROM toba_wisata order by id_toba_wisata desc";
                                $tobawis = mysqli_query($conn, $query2);
                                while($tobawisa = mysqli_fetch_array($tobawis)){ ?>   
                                <tr>
                                    <td><?=$tobawisa['id_toba_wisata']?></td>
                                    <td><?=$tobawisa['nama']?></td>
                                    <td><?=$tobawisa['tujuan']?></td>
                                    <td><?=$tobawisa['jumlah_pengunjung']?></td>
                                    <td><?=$tobawisa['metode_bayar']?></td>
                                    <td><?=$tobawisa['status_transaksi']?></td>
                                    <td><?=$tobawisa['bukti_bayar']?></td>
                                    <?php if($tobawisa['status_transaksi'] == "Lunas" && $tobawisa['bukti_bayar']!="belum dikirim"){?>
                                    <td style="color:green;"><i class="fa fa-check"></i>Transaksi Selesai</td>
                                <?php }else{ ?>
                                    <td><a href="beri_konfirmasi_transaksi.php?id_toba=<?=$tobawisa['id_toba_wisata']?>"><button class="btn btn-primary"><i class="fa fa-location-arrow"></i>  Beri Konfirmasi</button></a></td>
                                <?php } ?>
                                </tr>
                            <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
        </div>
             <!-- /. PAGE INNER  -->
    </div>
         <!-- /. PAGE WRAPPER  -->
        <!-- </div> -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
