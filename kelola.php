<?php 
include'config.php';
    $id_pendaftaran = '';
    $nama = '';
    $alamat = '';
    $tanggal = '';
    $email = '';
    $no_telepon = '';
    $jk = '';
    $agama = '';
    $sekolah = '';
    $jurusan = '';
    $desa = '';
    $kec = '';
    $kota = '';
    $prov = '';
    $kode = '';
    

    if(isset($_GET['edit'])){
        $id_pendaftaran = $_GET['edit'];
        $sql = "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
        $query = mysqli_query($db, $sql);
        $result = mysqli_fetch_assoc($query);
        $nama = $result['nama'];
        $alamat = $result['alamat'];
        $tanggal = $result['tgl'];
        $email = $result['email'];
        $notel = $result['no_telepon'];
        $jk = $result['jenis_kelamin'];
        $agama = $result['agama'];
        $sekolah = $result['sekolah_asal'];
        $jurusan = $result['jurusan'];
        $desa = $result['desa'];
        $kecamatan = $result['kecamatan'];
        $kota = $result['kota'];
        $provinsi = $result['provinsi'];
        $kode = $result['kd_pos'];
        
        
    }
?>


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
    <h2>Formulir Pendaftaran Siswa SMK Negeri 1 Lagos</h2><br>
        <form action="proses.php" method="POST">
            <input type="hidden" value="<?php echo $id_pendaftaran;?>" name="id_pendaftaran">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama: </label>
                <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>" placeholder="nama lengkap" />
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3"><?php echo $alamat;?></textarea>
            </div>
            <div class="mb-3">
                <label for="tgl" class="form-label">Tanggal Lahir: </label>
                <input type="date" class="form-control" name="tgl" value="<?php echo $tanggal;?>" placeholder="tanggal lahir" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email: </label>
                <input type="email" class="form-control" name="email" value="<?php echo $email;?>" placeholder="email " />
            </div>
            <div class="mb-3">
                <label for="notel" class="form-label">No.Tel: </label>
                <input type="number" class="form-control" name="notel" value="<?php echo $notel;?>" placeholder="nomor telepon" />
            </div>
            <div class="mb-3">
            <div class="form-check">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br> 
                <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jk == 'laki-laki'){echo "checked";}?> value="laki-laki">
                <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
                <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jk == 'perempuan'){echo "checked";}?> value="perempuan"> 
                <label class="form-check-label" for="laki-laki">Perempuan</label>
            </div>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama: </label>
                    <select name="agama" class="form-control">
                        <option <?php if($agama == 'islam'){echo "selected";}?> value="islam">Islam</option>
                        <option <?php if($agama == 'kristen'){echo "selected";}?> value="kristen">Kristen</option>
                        <option <?php if($agama == 'hindu'){echo "selected";}?> value="hindu">Hindu</option>
                        <option <?php if($agama == 'budha'){echo "selected";}?> value="budha">Budha</option>
                        <option <?php if($agama == 'atheis'){echo "selected";}?> value="atheis">Atheis</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
                <input type="text" class="form-control" name="sekolah_asal" value="<?php echo $sekolah;?>" placeholder="nama sekolah" />
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Jurusan: </label>
                    <select name="jurusan" class="form-control">
                        <option <?php if($jurusan == 'pplg'){echo "selected";}?> value="pplg">PPLG</option>
                        <option <?php if($jurusan == 'to'){echo "selected";}?> value="to">TO</option>
                        <option <?php if($jurusan == 'mplb'){echo "selected";}?> value="mplb">MPLB</option>
                        <option <?php if($jurusan == 'ph'){echo "selected";}?> value="ph">PH</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="desa" class="form-label">Desa: </label>
                <input type="text" class="form-control" name="desa" value="<?php echo $desa;?>" placeholder="Desa" />
            </div>
            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan: </label>
                    <select name="kec" class="form-control">
                        <option <?php if($kec == 'cisarua'){echo "selected";}?> value="cisarua">Cisarua</option>
                        <option <?php if($kec == 'ngamprah'){echo "selected";}?> value="ngamprah">Ngamprah</option>
                        <option <?php if($kec == 'jambudipa'){echo "selected";}?> value="jambudipa">Jambudipa</option>
                        <option <?php if($kec == 'arab'){echo "selected";}?> value="arab">Arab</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="kota" class="form-label">Kota: </label>
                    <select name="kota" class="form-control">
                        <option <?php if($kota == 'bandung'){echo "selected";}?> value="bandung">Bandung</option>
                        <option <?php if($kota == 'cirebon'){echo "selected";}?> value="cirebon">Cirebon</option>
                        <option <?php if($kota == 'tasik'){echo "selected";}?> value="tasik">Tasik</option>
                        <option <?php if($kota == 'garut'){echo "selected";}?> value="garut">Garut</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="prov" class="form-label">Provinsi: </label>
                    <select name="prov" class="form-control">
                        <option <?php if($prov == 'jawabar'){echo "selected";}?> value="jawabar">Jawa Barat</option>
                        <option <?php if($prov == 'jawatim'){echo "selected";}?> value="jawatim">Jawa Timur</option>
                        <option <?php if($prov == 'sulawesi'){echo "selected";}?> value="sulawesi">Sulawesi</option>
                        <option <?php if($prov == 'jawir'){echo "selected";}?> value="jawir">Jawir</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="kp" class="form-label">Kode Pos: </label>
                <input type="text" class="form-control" name="ks_pos" value="<?php echo $kode;?>" placeholder="kode pos" />
            </div>
            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php 
                        if(isset($_GET['edit'])){
                    ?>
                            <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                                simpan perubahan
                        </button>
                        <?php
                        }else{
                        ?>
                            <button type="submit" name="aksi" value="add" class="btn btn-primary">
                                daftar
                        </button>
                        <?php
                        }
                        ?>
                        <a href="index.php" type="button" class="btn btn-danger">batal</a>
                        
                </div>
            </div>
        </form>
    </div>

</body>
</html>
