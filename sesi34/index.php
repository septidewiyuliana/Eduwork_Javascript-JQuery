<?php
include "data.php";
$query = mysqli_query($conn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
<body>
    <div class="container my-5">
        <div class="center-title">
            <h1 class="white-text">Perpustakaan Eduwork</h1>
        </div>
        <div class="center-buttons my-3">
            <a href= "index.php">Buku</a> |
            <a href= "anggota.php">Anggota</a> |
            <a href= "peminjaman.php">Peminjaman</a> |
        </div>
        <table id="myTableBuku" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ISBN</th>
                    <th>Judul</th>
                    <th>Tahun Terbit</th>
                    <th>Harga Pinjam </th>
                    <th>Stok </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data_buku  = mysqli_query($conn, "SELECT * FROM buku");
                    $i = 1;
                    while ($ambil_data = mysqli_fetch_array($data_buku)) {
                        $isbn = $ambil_data["isbn"];
                        $judul = $ambil_data["judul"];
                        $tahun = $ambil_data["tahun"];
                        $harga_pinjam = $ambil_data["harga_pinjam"];
                        $stok = $ambil_data["qty_stok"];

                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $isbn ?></td>
                            <td><?= $judul ?></td>
                            <td><?= $tahun ?></td>
                            <td><?= $harga_pinjam ?></td>
                            <td><?= $stok ?></td>
                            <td>
                              <a class="btn btn-danger"  href="buku/delete.php?isbn=<?php echo $ambil_data['isbn']; ?>" onclick="return confirm ('Hapus data ini?')">Delete</a>
                               <a class="btn btn-warning" href="buku/edit.php?isbn=<?php echo $ambil_data['isbn']; ?>">Edit</a>
                            </td>
                        </tr>
                        <?php 
                    }
                ?>
            </tbody>
        </table>
        <div class="left-buttons">
            <a href= "buku/tambahbuku.php">Tambah Buku</a> 
        </div>

    </div>
    </div>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myTableBuku, MytableAnggota, MyTablePeminjaman').DataTable();
        });
    </script>
   </body>
</html>
