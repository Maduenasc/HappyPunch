<!DOCTYPE html>
<html>
<head>
	<link href="<?= base_url("css/bootstrap.min.css") ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




  <style>

    body {
      background-image: url("<?php echo base_url('../public/img/image4.jpg');?>");  
    }
	
</style>

	<title> <?php echo $title; ?></title>
</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top py-0">
  <div class="container">
    <a class="navbar-brand py-0" href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('../public/img/HappyPunch.png'); ?>" width="8%" height="8%">     
     
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" style="color:orange" href="<?php echo base_url('pages/material'); ?>">Material</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:orange" href="<?php echo base_url('pages/reserva'); ?>">Reserva</a>
        </li>
      <?php if (session()->get('isLoggedIn')): ?>

      <li class="nav-item">
          <a class="nav-link bg-warning" style="color:black" href="<?php echo base_url('user/profile'); ?>">Tu perfil (<?php echo session()->get('user'); ?>)</a>
      </li>

      <li class="nav-item">
          <a class="nav-link" style="color:orange" href="<?php echo base_url('user/logout'); ?>">Desconectar</a>
      </li>
                <?php else: ?>
                  
      <li class="nav-item">
        <a class="nav-link bg-warning" style="color:black" href="<?php echo base_url('user/login'); ?>">Iniciar sesion</a>
      </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>