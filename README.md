# Design Pattern examples in PHP
Examples of different Design Patterns implemented in PHP

## If you want to quickly install it ...
... you could just clone this repo and run
```
composer install
```
in the root folder and then run:
```
docker-compose up -d
```

This way you would have the example running if you have php installed and you could test it by navigating to:
```
http://dpatterns.localhost:8000
```
in your browser.

*If you are not using Chorme you would have to add
```
127.0.0.1       dpatterns.localhost
```
to your /etc/hosts file.

## The Unit tests
you could run the PHPUnit tests like so:
```
docker exec -it design_patterns_php ./vendor/bin/phpunit
```