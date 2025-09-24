<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
        $Listdosen=["Naswanida Nafiula", "Daffa", "Fiza"];

        // echo $Listdosen[2] . "<br>";
        // echo $Listdosen[0] . "<br>";
        // echo $Listdosen[1] . "<br>";

        // menampilkan pakai looping
        for ($i=0; $i < count($Listdosen); $i++) { 
            echo $Listdosen[$i] . "<br>";
        }
        ?>
    </body>
</html>