<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/signin.css">
</head>

<body class="text-center">

    <form class="form-signin" method="POST" action="<?= BASEURL ?>/login/auth">

        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <p>SI Ternak Lele Ponpes Al-Furwan Muhammadiyah</p>
        <?php Flasher::flash(); ?>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</body>

</html>