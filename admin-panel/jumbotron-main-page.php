<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "adminarcelon");
//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //ambil data dari tiap elemen dalam form
    $tittle = $_POST["tittle"];
    $deskripsi = $_POST["deskripsi"];
    $gambar = $_POST["gambar"];

    //query insert data
    $query = "INSERT INTO mainpagehome
                VALUES
                ('', '$tittle', '$deskripsi', '$gambar')";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Admin Arcelon</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>

    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>ARC<span>ELON</span></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="img/1.jpg" class="img-square" width="80"></a></p>
                    <h5 class="centered">Kevin Jayadi Ahmad</h5>
                    <?php
                    include "menu.php";
                    ?>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <form action="" method="post">
            <section id="main-content">
                <section class="wrapper">
                    <section class="wrapper">
                        <h3><i class="fa fa-angle-right"></i> Form Jumbotron Main Page Home</h3>
                        <!-- BASIC FORM ELELEMNTS -->
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <h4 class="mb"><i class="fa fa-angle-right"></i> Form</h4>
                                    <form class="form-horizontal style-form">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label" for="tittle">Tittle</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tittle" id="tittle">
                                                <span class="help-block">Ini Adalah Form Untuk Mengganti Tittle Di Jumbotron Slide Pertama</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label" for="deskripsi">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                                                <span class="help-block">Ini Adalah Form Untuk Mengganti Deskripsi Di Jumbotron Slide Pertama</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label" for="gambar">Gambar</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="gambar" id="gambar">
                                                <span class="help-block">Ini Adalah Form Untuk Mengganti Gambar Di Jumbotron Slide Pertama</span>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </form>
                                </div>
                                <!-- /form-panel -->
        </form>
        </div>
        </div>
        <!-- col-lg-12-->
        </div>
    </section>
    </section>
    </section>
    <br>
    <br>
    <br>
    <br>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
            </p>
            <div class="credits">
                <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
                Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
            </div>
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="lib/sparkline-chart.js"></script>
    <script src="lib/zabuto_calendar.js"></script>
</body>

</html>