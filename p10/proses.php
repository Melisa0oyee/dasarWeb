<?php

    include ("koneksi.php");

    $aksi = $_GET['aksi'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];


    if ($aksi == 'tambah') {
        $query = "INSERT INTO anggota(nama, jenis_kelamin, alamat, no_hp) 
        VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_hp')";

        if (mysqli_query($connect, $query) ) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($connect);
        }
    } else if ($aksi == 'ubah'){
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $query = "UPDATE anggota SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_telp = '$no_hp' WHERE id = '$id'";

            if (mysqli_query($connect, $query) ) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal mengupodate data: " . mysqli_error($connect);
            }
        } else{
            echo "ID tidak valid";
        }
    } else if($aksi == 'hapus'){

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = "DELETE FROM anggota WHERE id = '$id'";

            if (mysqli_query($connect, $query) ) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal MENGHAPUS data: " . mysqli_error($connect);
            }

        } else{
        echo "ID tidak valid";  
        }
    }
    else{
        header("Location: index.php");
    }

    mysqli_close($connect);

?>