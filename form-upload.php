<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
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
            <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
            <a class="nav-link" href="../kelola.php">Pendaftaran</a>
            <a class="nav-link" href="../guru/form-guru.php">Data Guru</a>
            <a class="nav-link" href="form-upload.php">Data Upload</a>
        </div>
        </div>
    </div>
    </nav>

    <?php
	// Load file koneksi.php
	include "../config.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$id = $_GET['edit'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM gambar WHERE id_gambar='".$id."'";
	$sql = mysqli_query($db, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
?>
    <div class="container mt-4">
        <h2>Form Upload File</h2>
        <form method="post" enctype="multipart/form-data<?php echo $id; ?>" action="upload.php">
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <input type="file" class="form-control" name="gambar"/>
            </div>
            <div class="mb-3 row mt-4">
                <div class="col">
                            <button type="submit" name="save" value="add" class="btn btn-primary">
                        daftar
                    </button>
                     
                    
                    <a href="index2.php" type="button" class="btn btn-danger">Batal</a>
                </div>
            </div>
        </form>
        </div>
</body>
</html>
