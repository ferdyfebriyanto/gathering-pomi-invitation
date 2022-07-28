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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="text-center hero">

    <script type="text/javascript">
        function alert(){
            swal("NIP anda Salah!!");
        }
        $(document).ready(function() {
        });
    </script>
    
    <?php
        $msg = '';
        session_start();
        if (isset($_POST['submit']) && !empty($_POST['nip']) ) {
                    
            if ($_POST['nip'] == '1') {
                $_SESSION['login'] = true;
                $_SESSION['id'] = $_POST['nip'] ;
                $_SESSION['nama'] = $_POST['nip'] ;
                header("location:./index.php");
                // echo '<script> alert();</script>';
                // echo '<script>swal("Good job!", "You clicked the button!", "success");</script>';
                
            }else {
                echo '<script> alert();</script>';
                // $msg = 'Wrong id or password';
                // echo '<script>swal({icon: "danger", "Hello world!"})</script>';
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
            <button class="submit-login w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">WR.Net - Pitoe Creative Network &copy; 2022</p>
        </form>
    </main>
    
</body>

</html>