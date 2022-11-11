<?php 
// koneksi kedalam database
include "koneksi.php";

//uji jika tombol ubah di klik 
if (isset($_POST['bubah'])){
    $ubah = mysqli_query($koneksi, "UPDATE mahasiswa set
                                    nim = '$_POST[tnim]',
                                    nama = '$_POST[tnama]',
                                    alamat ='$_POST[talamat]',
                                    prodi = '$_POST[tprodi]'
                                    where id = '$_POST[id]'
                            "); 
    //membuat pengujian jika ubah  data berhasil atau gagal
    if($ubah){
        echo "<script>
        alert ('ubah data suskses');
        document.location = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('ubah data gagal');
        document.location = 'index.php';
        </script>";
    }
}