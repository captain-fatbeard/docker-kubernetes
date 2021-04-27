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
kubectl apply -f opt/kubernetes/mariadb.yaml
kubectl apply -f opt/kubernetes/configmaps.yaml
kubectl apply -f opt/kubernetes/secret.yaml
kubectl apply -f opt/kubernetes/deployment.yaml
kubectl apply -f opt/kubernetes/loadbalancer.yaml
```