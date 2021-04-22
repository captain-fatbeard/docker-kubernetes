build dev:
	docker image build --target build -t php-app:v1 .

production:
	docker image build --target production -t php-app:v1 .

prod:
	docker image build --target production -t gcr.io/ambi-valinor-ds/php-app:v1 .
	docker push gcr.io/ambi-valinor-ds/php-app:v1
