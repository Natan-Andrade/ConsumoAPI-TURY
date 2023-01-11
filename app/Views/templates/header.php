<?php

  $session = session();

  $primeiro_nome = $session->get('primeiro_nome');

  if($primeiro_nome == null): 
    echo 
    "
      <script>
        alert('Faça login para acessar');
        window.location.href = '/login';
      </script>
    "; 
  endif;

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>D/NA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('theme/dist/css/adminlte.min.css'); ?>">
  <link href="<?= base_url('assets/js/Chart.js'); ?>">
  
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>