<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Tambah Buku</h2>
        <div class="form-container">
            <form action="proses_tambah_buku.php" method="post">
                <table class="table">
                    <tr>
                        <td><label for="isbn">ISBN:</label></td>
                        <td><input type="text" class="form-control" id="isbn" name="isbn" required="" autocomplete="off" oninput="checkForm()"></td>
                    </tr>
                    <tr>
                        <td><label for="judul">Judul:</label></td>
                        <td><input type="text" class="form-control" id="judul" name="judul" required="" autocomplete="off" oninput="checkForm()"></td>
                    </tr>
                    <tr>
                        <td><label for="tahun_terbit">Tahun Terbit:</label></td>
                        <td><input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" required="" autocomplete="off" oninput="checkForm()"></td>
                    </tr>
                    <tr>
                        <td><label for="harga_pinjam">Harga Pinjam:</label></td>
                        <td><input type="number" class="form-control" id="harga_pinjam" name="harga_pinjam" required="" autocomplete="off" oninput="checkForm()"></td>
                    </tr>
                    <tr>
                        <td><label for="stok">Stok:</label></td>
                        <td><input type="number" class="form-control" id="stok" name="stok" required="" autocomplete="off" oninput="checkForm()"></td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Tambah Buku</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function checkForm() {
            var isbn = document.getElementById('isbn').value;
            var judul = document.getElementById('judul').value;
            var tahun_terbit = document.getElementById('tahun_terbit').value;
            var harga_pinjam = document.getElementById('harga_pinjam').value;
            var stok = document.getElementById('stok').value;
            var submitBtn = document.getElementById('submitBtn');

            if (isbn.trim() !== '' && judul.trim() !== '' && tahun_terbit.trim() !== '' && harga_pinjam.trim() !== '' && stok.trim() !== '') {
                submitBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
            }
        }
    </script>
</body>
</html>
