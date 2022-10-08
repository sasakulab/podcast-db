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
    echo "SERVER_NAME: " .$_SERVER['SERVER_NAME']. "\n";
    echo "DOCUMENT_ROOT :" .$_SERVER['DOCUMENT_ROOT'];
    phpinfo(); 
?>
</body>
</html>