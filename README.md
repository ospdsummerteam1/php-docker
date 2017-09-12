# php-docker
環境構築

## setup
```
docker-compose build
cd laravel-app
composer install
cd ..
docker-compose up

access to http://localhost:8080
```

### composer
https://github.com/composer/composer

macの場合
```
brew install homebrew/php/composer
```

### mysql login
```
mysql -uroot -ppass -P13306 -h0.0.0.0
```

## 参考
- http://qiita.com/eidera/items/19decbfc290b4776cfc3
- https://github.com/laravel/framework/issues/9080
