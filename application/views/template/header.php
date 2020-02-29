<?php
	$uri1 = $this->uri->segment(1);
	$uri2 = $this->uri->segment(2);
	$uri3 = $this->uri->segment(3);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>E-dekidaka  <?= $uri1.'  '.$uri2 ?></title>
		<link rel="stylesheet" href="<?= site_url() ?>plugin/fa/css/all.css">
		<link rel="stylesheet" href="<?= site_url() ?>plugin/bs4/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= site_url() ?>assets/css/custom.css">
		<link rel="stylesheet" href="<?= site_url() ?>plugin/c3js/c3.css">
		<script src="<?= site_url() ?>plugin/jquery/jquery-3.4.1.min.js">
		</script>
		<script src="<?= site_url() ?>plugin/jquery/popper.min.js">
		</script>
		<script src="<?= site_url() ?>plugin/bs4/js/bootstrap.min.js">
		</script>
		</head>
		<body>
			<nav class="navbar navbar-expand-md bg-dark navbar-dark">
				<b class="navbar-brand"><img src="<?= site_url('assets/img/taci.svg') ?>" alt="TACI" class="logo"></b>
				<ul class="navbar-nav">
					<li class="nav-item <?= $this->custom->actved($uri1,'dashboard')?>">
						<a class="nav-link" href="<?= site_url() ?>dashboard">
							<i class="fa fa-home"></i> Dashboard
						</a>
					</li>
					<li class="nav-item <?= $this->custom->actved($uri1,'produksi')?>">
						<a class="nav-link" href="<?= site_url() ?>produksi">
						<i class="fa fa-industry"></i> Produksi
						</a>
					</li>
					<li class="nav-item <?= $this->custom->actved($uri1,'plan')?>">
						<a class="nav-link" href="<?= site_url() ?>plan">
							<i class="fab fa-creative-commons-by"></i> Planing
						</a>
					</li>
					<li class="nav-item <?= $this->custom->actved($uri1,'pengaturan')?>">
						<a class="nav-link" href="<?= site_url() ?>pengaturan">
							<i class="fa fa-cog"></i> Pengaturan
						</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-md-auto">
					<li class="nav-item">
						<a href="#" class="profil-icon">
							<i class="fas fa-user-circle"></i>
						</a>
					</li>
				</ul>
			</nav>
			<div class="container-fluid">
				<div class="mt-2"></div>