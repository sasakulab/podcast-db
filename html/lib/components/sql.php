<?php

$ini = $_SERVER['DOCUMENT_ROOT'] . "/environment.ini";
$iniraw = parse_ini_file($ini, false);

$host = $iniraw['mysqlauth.hostname'];
$dbn = $iniraw['mysqlauth.database'];
$user = $iniraw['mysqlauth.username'];
$pass = $iniraw['mysqlauth.password'];

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbn", "$user", "$pass");
//     print('接続に成功しました。<br>');
// } catch (PDOException $e) {
//    print('Error:' . $e->getMessage());
//     die();
//}

?>