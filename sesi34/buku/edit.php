<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

    <form method="POST" action="proses_edit_buku.php" onsubmit="return confirmEdit();">
        <input type="hidden" name="isbn" value="<?php echo $book['isbn']; ?>">
        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $isbn; ?>">
        </div>
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>">
        </div>
        <div class="form-group">
            <label for="tahun">Tahun Terbit:</label>
            <input type="number" class="form-control" id="tahun" name="tahun" value="<?php echo $tahun_terbit; ?>">
        </div>
        <div class="form-group">
            <label for="harga_pinjam">Harga Pinjam:</label>
            <input type="number" class="form-control" id="harga_pinjam" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>">
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $stok; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Simpan Perubahan</button>
    </form>

    <script>
        function confirmEdit() {
            return confirm("Anda yakin ingin menyimpan perubahan?");
        }
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
