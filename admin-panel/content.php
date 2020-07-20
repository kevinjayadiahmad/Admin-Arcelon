<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "adminarcelon");

//ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM jumbotron-main-page-home");
var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashio - Bootstrap Admin Template</title>

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
    <h3><i class="fa fa-angle-right"></i> Form Jumbotron Main Page Home</h3>
    <table border="1" cellpading="10" cellspacing="0">
        <table class="table table-striped table-bordered">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Tittle</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <a href="" class="glyphicon glyphicon-plus p-2 text-white rounded" data-toggle="tooltip" title="Edit">Ubah</a>
                    <a href="" onclick="return confirm ('Anda Yakin?');" class="glyphicon glyphicon-trash p-2 text-white rounded" data-toggle="
        			tooltip" title="Delete">Hapus</a>
                </td>
                <td><img src="img/2.png" width="50"></td>
                <td>ApsaraDB For RDS</td>
                <td>Cut down latency and deploy globally on Alibaba Cloud’s international network of 18 data center regions and 42 availability zones, including access to China under one single global account.</td>
            </tr>
        </table>
</body>

</html>