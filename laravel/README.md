# laravel-docker-kubernetes
Laravel docker kubernetes template

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

## install laravel project using composer container: 
```
docker-compose run --rm composer create-project --prefer-dist laravel/laravel .
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
