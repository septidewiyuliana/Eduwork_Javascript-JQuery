<?php
include "data.php";
$query = mysqli_query($conn, "SELECT * FROM peminjaman");
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
        <table id="MytablePeminjaman" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                 </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($query) > 0) {
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo date ("d F Y",strtotime ($data["tgl_pinjam"])); ?></td>
                            <td><?php echo date ("d F Y",strtotime($data["tgl_kembali"])); ?></td>
                         </tr>
                        <?php $no++;
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="left-buttons">
            <a href= "peminjaman/tambahpeminjaman.php">Tambah Peminjaman</a> 
        </div>
    </div>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
         $(document).ready(function () {
       $('#MytablePeminjaman').DataTable();
   });
</script>

    </body>
</html>
