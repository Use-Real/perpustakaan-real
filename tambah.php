<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <nav class="navbar bg-primary">
            <div class="container-fluid">
            <a class="navbar-brand text-light"><strong>Perpustakaan Saya</strong></a>
            </div>
        </nav>

        <figure class="text-center">
            <blockquote class="blockquote mt-4">
            <p>Kelola Data Perpustakaan</p>
            </blockquote>
            <figcaption class="blockquote-footer">
            <cite title="Source Title">Tambah Data Buku</cite>
            </figcaption>
        </figure>

        <form action="proses.php" method="post">
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Nama Buku">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukan Nama Pengarang Buku">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukan Nama Penerbit Buku">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="Novel">Novel</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Religi">Religi</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Sejarah">Sejarah</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label"></label>
                <div class="col">
                    <button type='submit' class='btn btn-success' name='btnProses' value='Tambah'>Tambah Data</button>
                    <a href="index.php" type="button" class="btn btn-danger">Batal</a>
                </div>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>