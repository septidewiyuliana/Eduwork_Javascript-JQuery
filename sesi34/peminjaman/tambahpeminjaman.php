<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Peminjaman</title>
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
        <h2 class="text-center">Tambah Peminjaman</h2>
        <div class="form-container">
            <form action="proses_tambah_peminjaman.php" method="post">
                <table class="table">
                    <tr>
                        <td><label for="tgl_pinjam">Tanggal Pinjam:</label></td>
                        <td><input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required="" autocomplete="off" oninput="checkForm()"></td>
                    </tr>
                    <tr>
                        <td><label for="tgl_kembali">Tanggal Kembali:</label></td>
                        <td><input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" required="" autocomplete="off" oninput="checkForm()"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Tambah</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function checkForm() {
            var tglPinjam = document.getElementById('tgl_pinjam').value;
            var tglKembali = document.getElementById('tgl_kembali').value;
            var submitBtn = document.getElementById('submitBtn');

            if (tglPinjam.trim() !== '' && tglKembali.trim() !== '') {
                submitBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
            }
        }
    </script>
</body>
</html>
