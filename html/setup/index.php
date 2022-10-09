<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/lib/components/sql.php";
    echo "open";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbn", "$user", "$pass");
        print('接続に成功しました。<br>');

        # table: User Database
        $stmt = $pdo->prepare("
            CREATE TABLE t_user(
            user_id INT(4) NOT NULL AUTO_INCREMENT,
            password VARCHAR(100) NOT NULL,
            account_id VARCHAR(20) NOT NULL,
            create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
            update_time TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL,
            name VARCHAR(20) NULL,
            twitter VARCHAR(20) NULL,
            mail VARCHAR(30) NULL,
            website VARCHAR(50) NULL,
            comment VARCHAR(400) NULL,
            PRIMARY KEY (user_id));         
        ");
        // $stmt->bindValue(':name', $name, PDO::PARAM_STR); / 今回は変数の必要がないので利用しない
        $stmt->execute();

        # table: Program Database
        $stmt = $pdo->prepare("
            CREATE TABLE t_program(
                program_id INT(4) NOT NULL AUTO_INCREMENT,
                owner_user_id INT (4) NOT NULL,
                name 
        ");
        // $stmt->bindValue(':name', $name, PDO::PARAM_STR); / 今回は変数の必要がないので利用しない
        $stmt->execute();

    } catch (PDOException $e) {
        print('Error:' . $e->getMessage());
        die();
    }

?>
