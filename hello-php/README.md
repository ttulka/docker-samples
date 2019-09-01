# Docker Image for PHP + MySQL

## Build the app
```
docker build --tag=php7.2-mysql .

docker image ls
```

## Share your image
```
docker tag php7.2-mysql ttulka/helloworlds:php
docker push ttulka/helloworlds:php
```

## Run as a load-balanced app
```
docker swarm init	// only once

docker stack deploy -c docker-compose.yml hello-php-app
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
docker stack rm hello-php-app
docker swarm leave --force
```
