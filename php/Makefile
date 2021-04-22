build dev:
	docker image build --target build -t php-app:v1 .

production:
	docker image build --target production -t php-app:v1 .

prod:
	export PROJECT_ID=ambi-valinor-ds
	docker image build --target production -t gcr.io/${PROJECT_ID}/php-app:v1 .
	docker push gcr.io/${PROJECT_ID}/php-app:v1
	kubectl create deployment cluster-php-test --image=gcr.io/${PROJECT_ID}/php-app:v1
