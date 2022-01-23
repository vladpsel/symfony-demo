# ECOICITY

Eco-friendly - social entrepreneurship project.

## Required

- Docker and Docker-compose [Docker-compose](https://docs.docker.com/get-docker/)
 
## Installation / Deployment

- Download project files into working directory
- Go to "docker" directory

**Docker-compose use .env variables. Before build docker image write in command line**
```
    set -a
    source ../.env.dist
    docker-compose build
    docker-compose up -d 
```

**Notice: If on your OC installed mysql / nginx you maybe should to stop it before run docker-containers. It can resolve confilct between ports on docker-containers and your local machine. Containers use default ports for php and mysql.**

After this open docker-php container terminal
Run
```
symfony check:requirements
composer install
```