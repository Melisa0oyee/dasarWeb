<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data ANnggota</title>
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn btn-success mt-2">Tambah Anggota</a>
        <br><br>
        <?php

            include ('koneksi.php');

            $query = "SELECT * FROM anggota order by id desc";
            $result = mysqli_query($connect, $query);
        ?>

        <table class="table">
            <thead class="thead-light">

                <tr>
                <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                 $no = 1;
                 while ($row = mysqli_fetch_array($result)) {
                   $kelamin = ($row["jenis_kelamin"] === 'L' )?'Laki-laki':'Perempuan';
            ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$row["nama"]?></td>
                    <td><?=$kelamin?></td> 
                    <td><?=$row["alamat"]?></td>
                    <td><?=$row["no_hp"]?></td>
                    <td>
                    <a class="btn btn-primary" href ="edit.php?id=<?=$row["id"]?>">Edit</a>
                    <a class="btn btn-danger" href="#" data-toggle='modal' data-target='#hapusModal<?=$row["id"]?>'>Hapus</a>
                    </td>
                </tr>

                <div class="modal fade" id="hapusModal<?= $row["id"]?>" table-index = "-1" role="dialog" 
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">konfirmasiHapus</h5>
                                <button type="button" class="role" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <?="Apalah Anda yakin ingin menghapus data dengan nama " . $row["nama"] . "?" ?>
                            </div>

                            <div class="modal-footer">
                                <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?$row["id"]?>">Hapus</a>
                                <button type="button" class="btn btn-secondare" data-dismiss="modal">Batal</button>
                            </div>
                        </div>

                    </div>
                </div>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdlivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>