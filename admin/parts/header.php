<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/admin/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    BEE Admin panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/admin/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/admin/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="../../index.php" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="/images/logo.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="../../index.php" class="simple-text logo-normal">
          BEE
          <!-- <div class="logo-image-big">
            <img src="assets/img/logo-big.png">
          </div> -->
        </a>
              </div>
      <div class="sidebar-wrapper">
<?php include $_SERVER['DOCUMENT_ROOT']."/admin/parts/nav.php"; ?>
      </div>
    </div>
    <div class="main-panel">