<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Halaman Login Pomi">
    <meta name="author" content="ferdyfebriyanto">
    <title>Login | POMI</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/pomi.png" type="image/x-icon">

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">

    <!-- Styles Vendor -->
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/"> -->
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body class="text-center hero">
    <?php
        $msg = '';
        session_start();
        if (isset($_POST['submit']) && !empty($_POST['nip']) ) {
                    
            if ($_POST['nip'] == '1') {
                $_SESSION['login'] = true;
                $_SESSION['id'] = $_POST['nip'] ;
                $_SESSION['nama'] = $_POST['nip'] ;
                header("location:./index.php");

                echo 'You have entered valid use name and password';
            }else {
                $msg = 'Wrong id or password';
            }
        }
    ?>

    <main class="form-signin w-100 m-auto">
        <form action="" method="post">
            <img class="mb-4" src="assets/img/pomi.png" alt="" width="300" height="auto">
            <h1 class="h3 mb-3 fw-normal">Selamat Datang</h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="nip" id="floatingInput" placeholder="Masukkan ID atau NIP anda"  required>
                <label for="floatingInput">Masukkan ID atau NIP anda</label>
            </div>
            <br>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">WR.Net - Pitoe Creative Network &copy; 2022</p>
        </form>
    </main>
</body>

</html>