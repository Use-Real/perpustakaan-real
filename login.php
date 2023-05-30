<style>
    .mt-10{
        margin-top: 4.5cm;
    }
</style>

<!doctype html>
<?php 
    session_start();
    if (isset($_SESSION['username'])){
        header('location:index.php');
        exit;
    }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-10">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php 
                    if (isset($_GET['pesan'])){
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Login Gagal</strong> <?php echo $_GET['pesan']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php } ?>
                <div class="card">
                    <div class="card-header text-center">
                        <b>LOGIN PERPUSTAKAAN</b>
                    </div>
                    <form action="cekLogin.php" method="post">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                    </svg></span>
                                    <input type="text" class="form-control" id="username" name="username" required placeholder="Masukan Username" aria-describedby="basic-addon3 basic-addon4">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg></span>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Masukan Password" aria-describedby="basic-addon3 basic-addon4">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                            </div>
                            <div class="text-center">
                                Belum punya akun silahkan <a href="daftar.php"> Daftar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>