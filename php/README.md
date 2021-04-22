

build dev
    make build


build production
    make production


    kubectl apply -f opt/kubernetes
    kubectl delete -f opt/kubernetes




## google kubernetes engine

Set project in gcloud

    gcloud config set project ambi-valinor-ds


#### Deployment

Build and push to registry

	docker image build --target production -t gcr.io/ambi-valinor-ds/php-app:v1 .
	docker push gcr.io/ambi-valinor-ds/php-app:v1

Connect apply manyfest to cluster

    gcloud container clusters get-credentials cluster-php-test --region europe-west1
    kubectl apply -f opt/kubernetes

