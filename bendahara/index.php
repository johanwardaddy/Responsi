<?php
session_start();
$_SESSION['username']=$_SESSION['username'];
if($_SESSION['username']==""){
  ?>
  <script type="text/javascript">
  window.location.href = "mlebu.php";
  </script>
  <?php
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BENDAHARA HMJTI</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.php">ADMIN</a>
            </div>
            <div style="color: white;
          padding: 15px 50px 5px 50px;
          float: right;
          font-size: 16px;"><a href="mumet.php?mentu=gawa" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
            				<li class="text-center">
                              <img src="assets/img/find_user.png" class="user-image img-responsive"/>
          					</li>
                    <li>
                      <a class="active-menu"  href="index.php?page="><i></i> Dashboard</a>
                    </li>
                    <li>
                       <a  href="#"><i></i> Tambah Saldo</a>
                       <ul class="nav nav-third-level">
                           <li>
                               <a href="index.php?page=ish">HMJ TI</a>
                           </li>
                           <li>
                               <a href="index.php?page=isp">Pengurus Harian</a>
                           </li>
                       </ul>
                   </li>
                   <li>
                      <a  href="#"><i></i>Olah Saldo</a>
                      <ul class="nav nav-third-level">
                          <li>
                              <a href="index.php?page=ksh">HMJ TI</a>
                          </li>
                          <li>
                              <a href="index.php?page=ksp">Pengurus Harian</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                     <a  href="#"><i></i>Laporan</a>
                     <ul class="nav nav-third-level">
                         <li>
                             <a href="index.php?page=lsh">HMJ TI</a>
                         </li>
                         <li>
                             <a href="index.php?page=lsp">Pengurus Harian</a>
                         </li>
                     </ul>
                 </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <?php
              if($_GET['page']=='isp'){
                include 'isi_saldo_ph.php';
              }else if($_GET['page']=='ish'){
                include 'isi_saldo_hmj.php';
              }else if($_GET['page']=='ksh'){
                include 'keluar_saldo_hmj.php';
              }else if($_GET['page']=='ksp'){
                include 'keluar_saldo_ph.php';
              }else if($_GET['page']=='lsp'){
                include 'laporan_ph.php';
              }else if($_GET['page']=='lsh'){
                include 'laporan_hmj.php';
              }else if($_GET['page']=='isiph'){
                include 'add_saldo_ph.php';
              }else if($_GET['page']=='minph'){
                include 'min_saldo_ph.php';
              }else if($_GET['page']=='lapph'){
                include 'buku_tabungan_ph.php';
              }else {
                ?><img src="assets/img/bg3.jpg" class="=image img-responsive"/><?php
              }
               ?>
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
