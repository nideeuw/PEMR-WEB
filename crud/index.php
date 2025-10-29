<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Data Anggota</h2>
    <a class="btn btn-success mt-2" href="create.php">Tambah Data</a>
    <br><br>
    <?php
    include('koneksi.php');
    $query = "SELECT * FROM anggota ORDER BY id desc";
    $result = pg_query($koneksi, $query);
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
        while ($row = pg_fetch_assoc($result)) {
            $kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan';
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $kelamin; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['no_telp']; ?></td>
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#hapusModal<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="hapusModal<?= $row['id']; ?>" aria-hidden="true" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin menghapus data dengan nama "<?= $row['nama']; ?>"?
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?= $row['id']; ?>">Hapus</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        pg_close($koneksi);
        ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>




<!-- <!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn-tambah">Tambah Anggota</a>
        //<?php
        // include('koneksi.php');

        // $query = "SELECT * FROM anggota ORDER BY id desc";
        // $result = pg_query($koneksi, $query);

        // if (pg_num_rows($result) > 0) {
        //     $no = 1;
        //     echo "<table>";
        //     echo "<tr><th>No</th><th>Nama</th><th>Jenis Kelamin</th>
        //           <th>Alamat</th><th>No. Telp</th><th>Aksi</th></tr>";
            
        //     while ($row = pg_fetch_array($result)) {
        //         $kelamin = ($row['jenis_kelamin'] === 'L') ? 'Laki-Laki' : 'Perempuan';
        //         echo "<tr>";
        //         echo "<td>" . $no++ . "</td>";
        //         echo "<td>" . $row['nama'] . "</td>";
        //         echo "<td>" . $kelamin . "</td>";
        //         echo "<td>" . $row['alamat'] . "</td>";
        //         echo "<td>" . $row['no_telp'] . "</td>";
        //         echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='#' onclick='konfirmasiHapus(" . $row['id'] . ", \"" . $row['nama'] . "\")'>Hapus</a></td>";
        //         echo "</tr>";
        //     }

        //     echo "</table>";
        // } else {
        //     echo "Tidak ada data.";
        // }

        // pg_close($koneksi);
        //?>
    </div>

    <script>
    function konfirmasiHapus(id, nama) {
        var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data dengan Nama " + nama + "?");
        if (konfirmasi) {
            window.location.href = "proses.php?aksi=hapus&id=" + id;
        }
    }
    </script>
</body>
</html> -->
