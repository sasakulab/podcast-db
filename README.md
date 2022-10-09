# podcast-db

The Podcast Database for everyone.

## Instruction

- 起動

```sh
docker-compose up -d
```

- 終了

```sh
docker-compose stop
```

- アクセス
  - [PHP](http://localhost:8080)
  - [phpmyadmin](http://localhost:4040)

## ファイル

php ファイルは html 配下に置く

## 必要認証情報

environment.ini に MySQL の以下の情報を書く。
environment.ini は直下に置く

```ini
[mysqlauth]
mysqlauth.hostname = "mysql"
mysqlauth.database = "poddb"
mysqlauth.username = "{ユーザー名}"
mysqlauth.password = "{パスワード}"
```

MySQL の 資格情報は、docker-compose.yml に書いています。

```yaml
environment:
  - MYSQL_ROOT_PASSWORD=root
  - MYSQL_DATABASE=test
  - MYSQL_USER=test
  - MYSQL_PASSWORD=test
```

.htpasswd

.htpasswd を /html 配下におきます。

```.htpasswd
{user}:{pass の hash}
```

## その他

- Bootstrap License: Code licensed MIT, docs CC BY 3.0.

## メモ

```sh
docker-php-ext-install pdo_mysql
```
