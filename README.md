## プロジェクトの始め方

1. /dev_tuitterに移動
2. /docker/db にdataディレクトリを作成
3. 以下のコマンドを叩く

```
$ docker-compose build
$ docker-compose up -d
$ docker-compose exec app bash
$ composer install
($ cp .env.example .env)
$ php artisan key:generate
($ php artisan serve)
```

3. そんで localhost:80にアクセスすれば画面表示されるはず多分

# 参考記事
- https://laraweb.net/environment/8652/
- 簡単

## DBの中身を直接みる

# Sequel Ace や Sequel Pro をインストールして以下の接続情報を入力

```
Host: 127.0.0.1
Username: laravel_user
Password: laravel_pass
Database: laravel_db
Port: 3306
```
※ docker-compose.yml の db environment で上の情報設定しちゃってるので冗長になってる
