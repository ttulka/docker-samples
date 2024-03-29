# Docker Image for a simple Python App

## Build the app
```
docker build --tag=hello-python .

docker image ls
```

## Run the app
```
docker run -p 4000:8080 hello-python

curl http://localhost:4000
```

## Stop the app
```
CTRL+C

// on Windows:
docker container ls
docker container stop <Container ID>
```

## Run the app in the background, in detached mode:
```
docker run -d -p 4000:8080 hello-python

curl http://localhost:4000
```

## Share your image
```
docker tag hello-python ttulka/helloworlds:python
docker push ttulka/helloworlds:python
```

### Pull and run the image from the remote repository
```
docker run -p 4000:8080 ttulka/helloworlds:python
```

## Run as a load-balanced app
```
docker swarm init	// only once

docker stack deploy -c docker-compose.yml hello-python-app
docker service ls
```

### Attach standard I/O to a container
```
docker attach <Container ID>
```

### Connect to a container
```
docker exec -it <Container ID> /bin/bash
```

### Take down the app and the swarm
```
docker stack rm hello-python-app
docker swarm leave --force
```
