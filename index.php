<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SMK Negeri 1 Lagos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="kelola.php">Pendaftaran</a>
            <a class="nav-link" href="form-guru.php">Data Guru</a>
        </div>
        </div>
    </div>
    </nav>
    <div class="container mt-4">
    <h2>Data siswa</h2>
    <a class="btn btn-primary" href="kelola.php" role="button">Tambah Data</a>
    <br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>no.telepon</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Kota</th>
                    <th>Provinsi</th>
                    <th>Kode pos</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM pendaftaran";
                    $query = mysqli_query($db, $sql);
                    while($siswa = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>".$siswa['id_pendaftaran']."</td>";
                        echo "<td>".$siswa['nama']."</td>";
                        echo "<td>".$siswa['tgl']."</td>";
                        echo "<td>".$siswa['jenis_kelamin']."</td>";
                        echo "<td>".$siswa['agama']."</td>";
                        echo "<td>".$siswa['sekolah_asal']."</td>";
                        echo "<td>".$siswa['no_telepon']."</td>";
                        echo "<td>".$siswa['email']."</td>";
                        echo "<td>".$siswa['jurusan']."</td>";
                        echo "<td>".$siswa['alamat']."</td>";
                        echo "<td>".$siswa['desa']."</td>";
                        echo "<td>".$siswa['kecamatan']."</td>";
                        echo "<td>".$siswa['kota']."</td>";
                        echo "<td>".$siswa['provinsi']."</td>";
                        echo "<td>".$siswa['kd_pos']."</td>";
                        echo "<td>
                        <a href='kelola.php?edit=".$siswa['id_pendaftaran']."' class='btn btn-warning'>Edit</a>
                        <a href='proses.php?hapus=".$siswa['id_pendaftaran']. "' class='btn btn-danger'>Delete</a>
                        </td>";
                    echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>    
