<?php
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM \"user\" WHERE \"username\"='$username' AND \"password\"='$password'";
    $result = pg_query($connect, $query);
    $row = pg_fetch_assoc($result);

    if($row['level'] == 1) {
        echo "Anda berhasil login. silahkan menuju"; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php    
    } else if ($row['level'] == 2) {
        echo "Anda berhasil login. silahkan menuju"; ?>
        <a href="homeGuest.html">Halaman HOME</a>
    <?php
    } else {
        echo "Anda gagal login. silahkan coba lagi"; ?>
        <a href="loginForm.html">Halaman LOGIN</a>
    <?php
    echo pg_last_error($connect);
    }
?>