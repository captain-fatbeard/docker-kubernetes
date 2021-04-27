# laravel-docker-kubernetes
Laravel docker kubernetes template
___
___
## Installation on localhost

##### Start & build server containers
```
docker-compose up -d server
```

##### Install composer dependencies in container
```
docker-compose exec -T fpm composer install
```

##### Install node dependencies in container
```
docker-compose run --rm npm install

```

##### migrate & seed database
```
docker-compose exec -T fpm php artisan migrate:fresh --seed
```
___
___

## Run project on localhost

##### Start server containers
```
docker-compose up -d server
```

##### Dev & watcher on localhost
```
docker-compose run --rm npm run watch
```
___
___

##### Find containerId
```
docker ps
```

##### Bash into container
```
docker exec -it <containerId> sh
```


___
___
## Deploy to production
##### Kubernetes deploy steps
```
kubectl apply -f ops/kubernetes/mariadb.yaml
kubectl apply -f ops/kubernetes/configmaps.yaml
kubectl apply -f ops/kubernetes/secret.yaml
kubectl apply -f ops/kubernetes/deployment.yaml
kubectl apply -f ops/kubernetes/loadbalancer.yaml
```