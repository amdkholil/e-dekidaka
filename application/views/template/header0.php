<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
			integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link rel="stylesheet" href="<?= site_url() ?>assets/css/custom.css">
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
				integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
			</script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
				integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
			</script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
				integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
			</script>
		</head>
		<body>
			<div class="container-fluid">
			<div class="sidebar float-left">
				<div class="title">
					<a href="#" class="toggle-sidebar">
						<i class="fa fa-arrow-circle-left"></i>
					</a>
					<span class="txt">E-Dekidaka</span>
				</div>
				<ul>
					<li>
						<a href="<?= site_url() ?>dashboard">
							<i class="fa fa-home"></i><span class="txt">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url() ?>produksi">
							<i class="fa fa-industry"></i><span class="txt">Produksi</span>
						</a>
					</li>
					<li>
						<a href="<?= site_url() ?>pengaturan">
							<i class="fa fa-cog"></i><span class="txt">Pengaturan</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-trash"></i><span class="txt">Trash</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="head row">
				<div class="col-md-1">
					<a href="#" class="toggle-sidebar"><i class="fa fa-bars"></i></a>
				</div>
			</div>