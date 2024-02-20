<?php 

include("config.php");

    if(isset($_POST['aksi'])){

        if($_POST['aksi']=='add'){
            $nama = $_POST['nama'];
            $jk = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $notel = $_POST['notel'];
            $email = $_POST['email'];
        
            $sql = "INSERT INTO data_guru (nama_guru, jenis_kelamin, alamat, no_telepon, email)
             VALUE ('$nama','$jk','$alamat','$notel','$email')";
             $query= mysqli_query($db, $sql);
        
            //  apakah queri berhasil disimpan
             if($query){
                // ke halaman index dengan status=sukses
                header('Location: index1.php?status=sukses');
            }else {
                // ke halaman index dengan status=gagal
                header('Location: index1.php?status=gagal');
            }
        }else if($_POST['aksi'] == 'edit'){
            $id_guru = $_POST['id_guru'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jenis_kelamin'];
            $notel = $_POST['notel'];
            $email = $_POST['email'];
    
            // buat queri
            $sql = "UPDATE data_guru SET nama_guru='$nama',alamat='$alamat',jenis_kelamin='$jk',no_telepon='$notel',email='$email' WHERE id_guru='$id_guru';";
            $query= mysqli_query($db, $sql);
    
            //  apakah queri berhasil disimpan
            if($query){
                // ke halaman index dengan status=sukses
                header('Location: index1.php?status=sukses');
            }else {
                // ke halaman index dengan status=gagal
                header('Location: index1.php?status=gagal');
            }
        }
    }
    if(isset($_GET['hapus'])){

        $id_guru = $_GET['hapus'];
    
        $sql = "DELETE FROM data_guru WHERE id_guru='$id_guru';";
        $query = mysqli_query($db, $sql);
    
        if($query){
            // ke halaman index dengan status=sukses
            header('Location: index1.php?status=sukses');
        }else{
            // ke halaman index dengan status=gagal
            header('Location: index1.php?status=gagal');
        }
    }
?>
