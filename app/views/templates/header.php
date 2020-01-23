<!DOCTYPE html>
<html>

<head>
	<title><?= $data['judul']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?= BASEURL; ?>">SI Ternak Lele Ponpes Al-Furwan Muhammadiyah</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>

					<a class="nav-item nav-link" href="<?= BASEURL; ?>/pembibitan">Pembibitan</a>
					<a class="nav-item nav-link" href="<?= BASEURL; ?>/penjadwalan">Penjadwalan</a>
					<a class="nav-item nav-link" href="<?= BASEURL; ?>/update_stock">Update Stock</a>
					<a class="nav-item nav-link" href="<?= BASEURL; ?>/panen">Panen</a>

				</div>
			</div>
		</div>
	</nav>