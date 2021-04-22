

build dev
    make build


build production
    make production


apply all kubenetes manifests
    kubectl apply -f opt/kubernetes



run locally
    kubectl get pods
    kubectl port-forward POD_NAME 8080:80


    kubectl delete -f opt/kubernetes




## google kubernetes engine
    gcloud config set project ambi-valinor-ds
