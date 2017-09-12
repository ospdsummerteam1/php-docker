# php-docker
環境構築


## setup
```
docker-compose build
cd laravel-php
composer install
cd ..
chown -R www-data:www-data .
docker-compose up

access to http://localhost:8080
```

###mysql login
```
mysql -uroot -prootpassword -P13306 -h0.0.0.0 
```

## 参考
- http://qiita.com/eidera/items/19decbfc290b4776cfc3
- https://github.com/laravel/framework/issues/9080
