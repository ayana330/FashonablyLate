# FashonablyLate(お問い合わせフォーム)

## 環境構築
- Dockerビルド
- 1.git clone git@github.com:ayana330/FashonablyLate.git
- 2.docker-compose up -d -build
- *Mysqlは、OSによって起動しない場合があるのでそれぞれのPCに合わ- せてdocker-compose.ymlファイルを編集してください。

## Laravel環境構築
- 1.docker-compose exec php bash
- 2.composer install
- 3..env.exampleファイルから.envファイルを作成し、環境変数を変更
- 4.php artisan key:generate
- 5.php artisan migrate
- 6.php artisan db:seed

## 使用技術
- PHP 8.0
- Laravel 10.0
- Mysql 8.0

URL
- 開発環境：http://localhost/
- phpMyadmin：http://localhost:8080/