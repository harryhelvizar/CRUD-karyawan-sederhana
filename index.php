<?php
 
    include_once  ('header.php');
    require ('functions.php');

    // select data karyawan
    $karyawan = query ("SELECT * FROM karyawan");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    

    // ambil data karyawan
    // $result = mysqli_query ($conn, "SELECT * FROM karyawan");

    // cek error
    // if(!$result){
    //     echo mysqli_error($conn);
    // }

    // ambil data karyawan dari object result
    // while($karywan = mysqli_fetch_assoc($result)){

    // var_dump ($karywan);
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>

    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.3.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <script src="assets/js/jquery-3.3.1.js"></script>    
    <script src="assets/bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>
<body>
    
    <!-- membuat kolom -->
    
        <div class="row kolom">
                <!-- kolom kiri -->
                <div class="col-md-5">
                    <h2>GAMBAR</h2>
                    <img class="img-fluid" src="assets/img/isometric-office.gif" alt="">
                </div>
                <!-- akhir kolom kiri -->

                <!-- kolom kanan -->
                <div class="col-md-7">
                    <h2>DAFTAR KARYAWAN</h2>
                    <div class="btn btn-dark">
                        <a href="tambah.php">TAMBAH DATA</a>
                    </div>
                    <br><br>
                    
                    <!-- tabel karyawan -->
                    <div class="container">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">NO KARYAWAN</th>
                                    <th scope="col">NAMA LENGKAP</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">JENIS KELAMIN</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach($karyawan as $row ) : ?>    
                                <tr>
                                    <td><?php echo $row["nomor_karyawan"]; ?></td>
                                    <td><?php echo $row["nama"]; ?></td>
                                    <td><?php echo $row["alamat"]; ?></td>
                                    <td><?php echo $row["jenis_kelamin"]; ?></td>
                                     
                                    <td>
                                        <a href="edit.php?nomor_karyawan=<?= $row["nomor_karyawan"]; ?>"
                                        onclick="return confirm('yakin');">EDIT</a> | 
                                        <a href="hapus.php?nomor_karyawan=<?= $row["nomor_karyawan"]; ?>"
                                        onclick="return confirm('yakin?');">DELETE</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>    
                            </tbody>
                        </table>
                    </div>    
                    <!-- stop tabel karyawan -->
                </div>
                <!-- akhir kolom kanan -->
        </div>    
    <!-- akhir kolom -->


</body>
</html>