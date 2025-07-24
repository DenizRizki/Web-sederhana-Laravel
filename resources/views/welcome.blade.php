<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar - {{ $tittle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 sidebar d-flex flex-column">
            <h4 class="text-white text-center py-3">Menu</h4>
            <a href="home">Home</a>
            <a href="about">Daftar lengkap</a>
            <a href="contact">Contact</a>
        </nav>

        <main class="col-md-9 col-lg-10 p-4">
            <div class="container">
                <h1 class="mb-4">Daftar nama siswa baru SMK INFORMATIKA PESAT</h1>
          
<table>
    <tr>
        <th>NAMA</th>
        <th>KELAS</th>
    </tr>
            <tr>
                @foreach ($siswas as $siswa)
                <tr>
                 <td>{{ $siswa['nama'] }}</td>
                  <td>{{ $siswa['kelas'] }}</td>
                </tr>
                @endforeach
            </tr>
</table>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
