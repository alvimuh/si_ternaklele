<!DOCTYPE html>
<html>

<head>
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark box-shadow">
		<div class="container">
			<a class="navbar-brand" href="<?= BASEURL; ?>">SI Ternak Lele Ponpes Al-Furwan Muhammadiyah</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link " href="<?= BASEURL . '/admin_pembibitan' ?>">
						Pembibitan </a>
					<a class="nav-item nav-link " href="<?= BASEURL . '/admin_penjadwalan' ?>">
						Penjadwalan </a>
					<a class="nav-item nav-link " href="<?= BASEURL . '/admin_stok' ?>">
						Stok </a>
					<a class="nav-item nav-link " href="<?= BASEURL . '/admin_panen' ?>">
						Panen </a>
					<a class="nav-item nav-link " href="<?= BASEURL . '/login/end' ?>">
						Logout </a>

				</div>
			</div>
		</div>
	</nav>