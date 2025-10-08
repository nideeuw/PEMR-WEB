<?php
// $input = $_POST['input'];
// $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

$nama = "";
$email = "";
$emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
    $email = $_POST['email'];
    // Memeriksa apakah input adalah email yang valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Lanjutkan dengan pengolahan email yang aman
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    } else {
        // Tangani input yang tidak valid
        $emailErr = "Email yang dimasukkan tidak valid.";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Aman</title>
</head>
<body>
    <h2>Form Input Aman</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Masukkan nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"><br><br>

        <label for="input">Masukkan email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>"><br><br>
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Data yang diproses dengan aman:</h3>";
        echo "<p>Nama: " . $nama . "</p>";
        echo "<p>Email: " . $email . "</p>";
    }
    ?>
</body>
</html>