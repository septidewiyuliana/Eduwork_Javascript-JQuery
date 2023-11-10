<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function checkForm() {
            var isbn = document.getElementById('isbn').value;
            var judul = document.getElementById('judul').value;
            var tahun = document.getElementById('tahun').value;
            var harga_pinjam = document.getElementById('harga_pinjam').value;
            var stok = document.getElementById('stok').value;
            var submitBtn = document.getElementById('submitBtn');

            if (judul.trim() !== '' && tahun.trim() !== '' && harga_pinjam.trim() !== '' && stok.trim() !== '') {
                submitBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
            }
        }
    </script>
    <title>Edit Buku</title>
</head>
<body>
    <?php
    include "../data.php";
    $id = $_GET['isbn'];
    $books = mysqli_query($conn, "SELECT * from buku WHERE isbn = '$id'");
    foreach ($books as $book) {
        $isbn = $book["isbn"];
        $judul = $book['judul'];
        $tahun_terbit = $book['tahun'];
        $harga_pinjam = $book['harga_pinjam'];
        $stok = $book['qty_stok'];
        $id_penerbit = $book['id_penerbit'];
    }
    ?>
    <form method="POST" action= "proses_edit_buku.php">
        <input type="hidden" name="isbn" value="<?php echo $book['isbn']; ?>">
        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $isbn; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>" oninput="checkForm()">
        </div>
        <div class="form-group">
            <label for="tahun">Tahun Terbit:</label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="<?php echo $tahun_terbit; ?>" oninput="checkForm()">
        </div>
        <div class="form-group">
            <label for="harga_pinjam">Harga Pinjam:</label>
            <input type="number" class="form-control" id="harga_pinjam" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>" oninput="checkForm()">
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $stok; ?>" oninput="checkForm()">
        </div>
        <button type="submit" class="btn btn-primary" name="update" id="submitBtn" disabled>Simpan Perubahan</button>
    </form>
</body>
</html>
