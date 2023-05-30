<?php 
    include 'koneksi.php';
    if (isset($_POST['btnProses'])) {
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $kategori = $_POST['kategori'];

        if ($_POST['btnProses']=="Tambah"){
            $insert = "INSERT INTO tb_buku VALUES('','$judul','$pengarang','$penerbit','$kategori')";
            $sqlin = mysqli_query($con,$insert);

            if ($sqlin) {
                header('location:index.php');
            }
        } else {
            $update = "UPDATE tb_buku SET judul='$judul',pengarang='$pengarang',penerbit='$penerbit',kategori='$kategori' WHERE id='$_POST[id]'";
            $sqlup = mysqli_query($con,$update);

            if ($sqlup) {
                header('location:index.php');
            }
        }
    } elseif ($_GET['hapus']) {
        $delete = "DELETE FROM tb_buku WHERE id='$_GET[hapus]'";
        $sqlde = mysqli_query($con,$delete);

        if ($sqlde) {
            header('location:index.php');
        }
    }
?>