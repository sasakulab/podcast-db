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
mysqlauth.username = "{ユーザー名}"
mysqlauth.password = "{パスワード}"
```

## その他

- Bootstrap License: Code licensed MIT, docs CC BY 3.0.
