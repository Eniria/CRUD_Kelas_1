<?php 
// koneksi kedalam database
include "koneksi.php";

//uji jika tombol ubah di klik 
if (isset($_POST['bhapus'])){


    $hapus = mysqli_query($koneksi, "DELETE from mahasiswa where id = '$_POST[id]'"); 


    //membuat pengujian jika ubah  data berhasil atau gagal
    if($hapus){
        echo "<script>
        alert ('hapus  data suskses');
        document.location = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('hapus data gagal');
        document.location = 'index.php';
        </script>";
    }
}