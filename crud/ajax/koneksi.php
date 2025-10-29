<?php
define('HOST','localhost');
define('USER','postgres');
define('PASS' ,'tes123');
define('DB1', 'prakwebdb');

$db1 = new PDO("pgsql:host=". HOST . ";port=5465;dbname=" . DB1, USER, PASS);
$db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>