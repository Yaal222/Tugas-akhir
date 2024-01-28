<?php 

include("config.php");

// cek apakah tombol daftar sudah di klik atau belom
if(isset($_POST['aksi'])){

    // ambil data dari formulir
    if($_POST['aksi']== 'add'){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];
        $notel = $_POST['notel'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];
        $tgl = $_POST['tgl'];
        $desa = $_POST['desa'];
        $kec = $_POST['kec'];
        $kota = $_POST['kota'];
        $prov = $_POST['prov'];
        $kode = $_POST['ks_pos'];
        // sesuai mysql
        $tgl_mysql = date("Y-m-d", strtotime($tgl));

        // buat queri
        $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, sekolah_asal, no_telepon, email, jurusan, tgl, desa, kecamatan, kota, provinsi, kd_pos)
        VALUE ('$nama','$alamat','$jk','$agama','$sekolah','$notel','$email','$jurusan','$tgl_mysql','$desa','$kec','$kota','$prov','$kode')";
        $query= mysqli_query($db, $sql);

        //  apakah queri berhasil disimpan
        if($query){
            // ke halaman index dengan status=sukses
            header('Location: index.php?status=sukses');
        }else {
            // ke halaman index dengan status=gagal
            header('Location: index.php?status=gagal');
        }
    }else if($_POST['aksi'] == 'edit'){
        $id_pendaftaran = $_POST['id_pendaftaran'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];
        $notel = $_POST['notel'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];
        $tgl = $_POST['tgl'];
        $desa = $_POST['desa'];
        $kec = $_POST['kec'];
        $kota = $_POST['kota'];
        $prov = $_POST['prov'];
        $kode = $_POST['ks_pos'];
        // sesuai mysql
        $tgl_mysql = date("Y-m-d", strtotime($tgl));

        // buat queri
        $sql = "UPDATE pendaftaran SET nama='$nama',alamat='$alamat',jenis_kelamin='$jk',agama='$agama',sekolah_asal='$sekolah',
        no_telepon='$notel',email='$email',jurusan='$jurusan',tgl='$tgl_mysql',desa='$desa',kecamatan='$kec',kota='$kota',provinsi='$prov',kd_pos='$kode' 
        WHERE id_pendaftaran='$id_pendaftaran';";
        $query= mysqli_query($db, $sql);

        //  apakah queri berhasil disimpan
        if($query){
            // ke halaman index dengan status=sukses
            header('Location: index.php?status=sukses');
        }else {
            // ke halaman index dengan status=gagal
            header('Location: index.php?status=gagal');
        }
    }
}

if(isset($_GET['hapus'])){

    $id_pendaftaran = $_GET['hapus'];

    $sql = "DELETE FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";
    $query = mysqli_query($db, $sql);

    if($query){
        // ke halaman index dengan status=sukses
        header('Location: index.php?status=sukses');
    }else{
        // ke halaman index dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}
?>

