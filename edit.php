<?php
    include_once ('header.php');
    require ('functions.php');

    // /ambil data di url
    $nomor_karyawan = $_GET["nomor_karyawan"];

    // query data karyawan berdasarkan nomor
    $karyawan = query("SELECT * FROM karyawan WHERE nomor_karyawan = $nomor_karyawan")[0];


    // cek tombol
    if( isset($_POST["submit"])){
        
        // cek data yg berhasil di edit

        if ( edit($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diedit');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal diedit');
                    document.location.href = 'tambah.php';
                <script>
            ";
        }


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit data</title>
</head>
<body>
    <!-- membuat kolom -->

    <div class="row kolom">
        <div class="col-md-5">
                <h2>GAMBAR</h2>
                <img class="img-fluid" src="assets/img/isometric-office.gif" alt="">
        </div>

            <div class="col-md-5 kanan">
                <h2>EDIT DATA KARYAWAN</h2>
                <!-- kolom -->
                <div class="container">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="number" name="nomor_karyawan" id="nomor_karyawan" class="form-control" placeholder="nomor karyawan" required
                            value = "<?= $karyawan ["nomor_karyawan"]; ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" name="nama" id="nama"  class="form-control" placeholder="nama karyawan" required
                            value = "<?= $karyawan ["nama"]; ?>">
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control" name="alamat" id="alamat"  rows="3" placeholder="alamat karyawan" required
                            value = "<?= $karyawan ["alamat"]; ?>">
                            </textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="jenis kelamin (L/P)" required
                            value = "<?= $karyawan ["jenis_kelamin"]; ?>">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">EDIT DATA</button>
                    </form>
                </div>
                <!-- akhir kolom -->
            </div>
    </div>
    
  
               

    <!-- akhir kolom -->
</body>
</html>