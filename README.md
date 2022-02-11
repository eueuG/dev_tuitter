## プロジェクトの始め方

1. /dev_tuitterに移動
2. /docker/db にdataディレクトリを作成
3. 以下のコマンドを叩く

```
$ docker-compose build
$ docker-compose up -d
$ docker-compose exec app bash
$ cd tuitter
$ composer install
$ php artisan php artisan key:generate
```

3. そんで localhost:80にアクセスすれば画面表示されるはず多分


# 参考記事
- https://laraweb.net/environment/8652/
- 簡単