<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/styleArray2.css">
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Naswanida Nafiula',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
        
        // echo "Nama : {$Dosen['nama']} <br>";
        // echo "Domisili : {$Dosen['domisili']}<br>";
        // echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
        ?>
        
        <h2>Data Dosen</h2>
        <table>
            <tr>
                <th>Nama</th>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <th>Domisili</th>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
</body>
</html>