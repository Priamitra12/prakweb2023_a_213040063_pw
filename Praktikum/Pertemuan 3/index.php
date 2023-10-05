<?php
// Koneksi ke database (gantilah dengan koneksi sesuai konfigurasi Anda)
$conn = mysqli_connect('localhost', 'root', '', 'prakweb2023_a_213040063') or die('KONEKSI GAGAL!!');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel books

$result = $conn->query("SELECT * FROM book");
$book = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $book[] = $row;
    }
}
// Tutup koneksi ke database
$conn->close();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PrimBooks</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <meta name="author" content="Moch Priamitra Nur Alif">
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">PrimBooks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Buku</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                    <a class="nav-link" href="#">PrimBooks</a>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row my-3 py-3 align-items-start">
            <div class="col-xl col-md-6 col-sm-12 justify-content-center mb-2">
                <div class="alert alert-light" role="alert">
                    Daftar Buku  - PrimBooks
                </div>
                <h3>Daftar Buku</h3>
                <table class="table table-responsive table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Looping Data -->
                                <?php
                                foreach ($book as $bk) { ?>
                                <tr>
                                    <th scope="row"><?= $bk['id_buku']; ?></th>
                                    <td><?= $bk['judul']; ?></td>
                                    <td><?= $bk['kategori']; ?></td>
                                    <td><?= $bk['penerbit']; ?></td>
                                    <td><?= $bk['tahun']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-secondary">Detail</button>
                                    </td>
                                </tr>
                                <?php } ?>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>