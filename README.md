## プロジェクトの始め方

1. /dev_tuitterに移動
2. 以下のコマンドを叩く

```
$ docker-compose build
$ docker-compose up -d
$ docker-compose exec app bash
$ cd src/tuitter
$ composer install
$ php artisan php artisan key:generate
```

3. そんで localhost:80にアクセスすれば画面表示されるはず


# 参考記事
- https://laraweb.net/environment/8652/
- 簡単