<!doctype html>
<?php

    session_start();
    if (!isset($_SESSION['username'])){
        header('location:login.php');
        exit;
    }

    include 'koneksi.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid text-success-emphasis">
                <a class="navbar-brand text-light" href="index.php"><strong>Perpustakaan Saya</strong></a>
                <button class="navbar-toggler btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <!-- <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Data Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Data Peminjaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">About</a>
                        </li> -->
                    </ul>
                    <form class="d-flex" role="search">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <a href="logout.php" class="btn btn-outline-light" type="button">Logout</a>
                    </form>
                </div>
            </div>
        </nav>

        <figure class="text-center">
            <blockquote class="blockquote mt-4 ">
            <p>Daftar Buku Perpustakaan</p>
            </blockquote>
            <figcaption class="blockquote-footer">
            <cite title="Source Title">Halaman Utama</cite>
            </figcaption>
        </figure>

        <a href="tambah.php" type="button" class="btn btn-primary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg> Tambah</a>

        <table class="table table-striped table-hover table-bordered align-middle table-responsive">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Kategori</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
                $query = "SELECT * FROM tb_buku";
                $sql = mysqli_query($con,$query);
                $no = 1;
                while ($data = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $data['judul']; ?></td>
                <td><?php echo $data['pengarang']; ?></td>
                <td><?php echo $data['penerbit']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td>
                <a href="edit.php?edit=<?php echo $data['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></a>

                <a href="proses.php?hapus=<?php echo $data['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                </svg></a>
                </td>
            </tr>
            <?php
                $no++;
            }?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>