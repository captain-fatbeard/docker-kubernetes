# laravel-docker-kubernetes
Laravel docker kubernetes template

## Installation on localhost

#### Start & build server containers
```
docker-compose up -d server
```

#### Install composer dependencies in container
```
docker-compose exec -T fpm composer install
```

#### Install node dependencies in container
```
docker-compose run --rm npm install

```

#### migrate & seed database
```
docker-compose exec -T fpm php artisan migrate:fresh --seed
```

___


## Run project on localhost

#### Start server containers
```
docker-compose up -d server
```

#### Dev & watcher on localhost
```
docker-compose run --rm npm run watch
```



___












## start dev services

```
docker-compose up -d server
```

## force new build
```
docker-compose up -d --build server
```

## run composer only
```
docker-compose run --rm composer 
```


## run php artisan
```
docker-compose run --rm artisan
```

## npm
```
docker-compose run --rm npm
```

## Find containerId
```
docker ps
```

## Bash into container
```
docker exec -it <containerId> sh
```


### force new dockerbuild
```
dc up -d --build server
```