## Kubectl

### View and switch clusters
    kubectl config get-contexts
    kubectl config current-context
    kubectl config use-context CLUSTER_NAME


#### Deployment

Build and push to registry

	docker image build --target production -t gcr.io/GCP_PROJECT/IMAGE_NAME:VERSION .
	docker push gcr.io/GCP_PROJECT/IMAGE_NAME:VERSION

Connect apply manyfest to cluster

    gcloud container clusters get-credentials GCP_CLUSTER_NAME --region europe-west1
    kubectl apply -f opt/kubernetes