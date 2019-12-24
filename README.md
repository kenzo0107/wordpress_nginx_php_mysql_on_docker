# WordPress with Nginx + PHP + MySQL

## Information

* Nginx 1.10.2
* PHP 5.6
* MySQL 5.7.16

## launch WordPress on localhost

```
$ docker-compose up -d
```

[http://localhost:8080](http://localhost:8080)


## access to db 

```sh
$ dc exec db mysql -h localhost -u wordpress -pwordpress wordpress
```