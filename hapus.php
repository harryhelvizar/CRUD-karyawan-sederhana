<?php

require ('functions.php');

 $nomor_karyawan = $_GET["nomor_karyawan"];

 if( hapus($nomor_karyawan) > 0 ){
     echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
     ";
 }else{
     echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
        </script> 
     ";
    
 }
?>