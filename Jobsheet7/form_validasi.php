<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="post" action="form_validasi.php">
            <label for="nama">Nama:<label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red"></span><br>
            
            <label for="email">Email:<label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red"></span><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color:red"></span>
            <span id="password-success" style="color:green;"></span><br>

            <input type="submit" value="Submit">
        </form>

        <div id="hasil">
            <!-- Hasil akan ditampilkan di sini -->
        </div>

        <script>
            $(document).ready(function(){
                $("#myForm").submit(function (event){
                    event.preventDefault(); // Mencegah form untuk di-submit secara default
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    if (nama == "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email == "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    // Validasi password, minimal 8 karakter
                    if (password.length < 8) {
                        $("#password-error").text("Password harus terdiri dari minimal 8 karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text("");  // Hapus pesan error password
                        $("#password-success").text("Password valid.").css("color", "green");  // Keterangan jika password valid
                    }
                    // if(!valid){
                    //     event.preventDefault();
                    //     // Menghentikan pengiriman form jika validasi gagal
                    // }

                    // Jika form valid, kirim data dengan AJAX
                    if (valid) {
                        $.ajax({
                            url: "form_validasi.php",
                            type: "POST",
                            data: $(this).serialize(), // Mengirim data form
                            success: function(response) {
                                $("#hasil").html(response); // Menampilkan hasil pengolahan di div #hasil
                            }
                        });
                    }
                })
            })
        </script>
    </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // Validasi nama
    if(empty($nama)){
        $errors[] = "Nama harus diisi.";
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Format email tidak valid.";
    }else if (strlen($password) < 8) {
        $errors[] = "Password harus terdiri dari minimal 8 karakter.";
    }

    // Jika ada kesalahan validasi
    if(!empty($errors)){
        foreach($errors as $error){
            echo $error . "<br>";
        }
    }else{
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
        echo "Password valid.";

    }
}
?>