<?php include $_SERVER['DOCUMENT_ROOT']."/lib/components/sql.php" ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php7.2-apache</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbn", "$user", "$pass");
        print('SQL の 接続に成功しました。<br>');
    } catch (PDOException $e) {
        print('Error:' . $e->getMessage());
        die();
    }
    echo "SERVER_NAME: " .$_SERVER['SERVER_NAME']. "\n";
    echo "DOCUMENT_ROOT :" .$_SERVER['DOCUMENT_ROOT'];
    phpinfo(); 
?>
</body>
</html>