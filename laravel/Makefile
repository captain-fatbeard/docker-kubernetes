build-nginx:
	docker image build -f opt/docker/nginx/Dockerfile -t laravel-example-project-nginx:v1 --target nginx .

build-fpm:
	docker image build -f opt/docker/fpm/Dockerfile -t laravel-example-project-fpm:v1 --target fpm .

dev:
	make build-nginx
	make build-fpm

prod:
	docker image build -f opt/docker/nginx/Dockerfile -t gcr.io/ambi-valinor-ds/laravel-example-project-nginx:latest --target nginx .
	docker image build -f opt/docker/fpm/Dockerfile -t gcr.io/ambi-valinor-ds/laravel-example-project-fpm:latest --target fpm .
	docker push gcr.io/ambi-valinor-ds/laravel-example-project-nginx:latest
	docker push gcr.io/ambi-valinor-ds/laravel-example-project-fpm:latest
