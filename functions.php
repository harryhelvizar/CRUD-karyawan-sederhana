<?php
 
// koneksi database
$conn = mysqli_connect ("localhost", "root", "", 
       "crud_karyawan");

        // membuat functions query
            function query($query){
                global $conn;
                $result = mysqli_query ($conn, $query);
                $rows = []; //membuat wadah kosong

                while ($row = mysqli_fetch_assoc($result)){
                    $rows [] = $row;
                }
                //    kembalikan wadahnya
                return $rows;
            }



            function tambah($data){
                global $conn;
                // ambil data dari tiap elemen
                $no_karyawan    = htmlspecialchars ($data["nomor_karyawan"]);
                $nama           = htmlspecialchars ($data["nama"]);
                $alamat         = htmlspecialchars ($data["alamat"]);
                $jk             = htmlspecialchars ($data["jenis_kelamin"]);

                //  query insert data
                $query = "INSERT INTO karyawan VALUES
                    ('$no_karyawan', '$nama', '$alamat', '$jk')";
                        
                mysqli_query ($conn, $query);

                return mysqli_affected_rows($conn);

            }



            function hapus ($nomor_karyawan){
                global $conn;
                mysqli_query($conn, "DELETE FROM karyawan WHERE nomor_karyawan = $nomor_karyawan");

                return mysqli_affected_rows ($conn);

            }

            
            function edit ($data){
                global $conn;

                $no_karyawan    = htmlspecialchars ($data["nomor_karyawan"]);
                $nama           = htmlspecialchars ($data["nama"]);
                $alamat         = htmlspecialchars ($data["alamat"]);
                $jk             = htmlspecialchars ($data["jenis_kelamin"]);

                $query = "UPDATE karyawan SET
                                nomor_karyawan = '$no_karyawan', 
                                nama = '$nama', 
                                alamat = '$alamat', 
                                jenis_kelamin = '$jk' 
                                WHERE nomor_karyawan = $no_karyawan";
                    
                mysqli_query ($conn, $query);

                return mysqli_affected_rows($conn);



            }

             

?>