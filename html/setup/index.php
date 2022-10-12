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
                self_introduction VARCHAR(800) NULL,
                create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
                update_time TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL,
                name VARCHAR(20) NOT NULL,
                twitter VARCHAR(20) NULL,
                mail VARCHAR(30) NULL,
                website VARCHAR(100) NULL,
                icon_path VARCHAR(100) NULL,
                tag VARCHAR(25) NULL,
                PRIMARY KEY (user_id));         
        ");
        // $stmt->bindValue(':name', $name, PDO::PARAM_STR); / 今回は変数の必要がないので利用しない
        $stmt->execute();

        # table: Program Database
        $stmt2 = $pdo->prepare("
            CREATE TABLE t_program(
                program_id INT(4) NOT NULL AUTO_INCREMENT,
                program_cid VARCHAR(20) NOT NULL,
                create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
                update_time TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL,
                owner_user INT(4) NOT NULL,
                name VARCHAR(50) NOT NULL,
                website VARCHAR(100) NULL,
                twitter VARCHAR(20) NULL,
                RSS VARCHAR(100) NULL,
                pl_apple_url VARCHAR(100) NULL,
                pl_spotify_url VARCHAR(100) NULL,
                pl_google_url VARCHAR(100) NULL,
                pl_yt_url VARCHAR(100) NULL,
                pl_niconico_url VARCHAR(100) NULL,
                description VARCHAR(800) NULL,
                embed VARCHAR(400) NULL,
                copylight VARCHAR(80) NULL,
                tag VARCHAR(25) NULL,
                PRIMARY KEY (program_id));
        ");
        // $stmt->bindValue(':name', $name, PDO::PARAM_STR); / 今回は変数の必要がないので利用しない
        $stmt2->execute();

        # table: News Database
        $stmt3 = $pdo->prepare("
            CREATE TABLE t_news(
                news_id INT(8) NOT NULL AUTO_INCREMENT,
                program_id INT(4) NOT NULL,
                create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
                update_time TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL,
                owner_user INT(4) NOT NULL,
                tag VARCHAR(25) NULL,
                contents VARCHAR(800) NULL,
                PRIMARY KEY (news_id));
        ");

        // $stmt->bindValue(':name', $name, PDO::PARAM_STR); / 今回は変数の必要がないので利用しない
        $stmt3->execute();

    } catch (PDOException $e) {
        print('Error:' . $e->getMessage());
        die();
    }

?>
