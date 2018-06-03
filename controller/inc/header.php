<?php 
    include '../lib/Session.php'; 
    Session::checkSession();
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>
<?php include '../helpers/Format.php'; ?>
<?php 
    $db = new Database();
    $fm = new Format();
?>
<?php 
  $userid = $_SESSION['userid'];
  $username = $_SESSION['username'];
  $userrole = $_SESSION['userRole'];
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: BDDoctorsInfo.com</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/appmenu.css">
  </head>
  <body>
<div class="wrapper">