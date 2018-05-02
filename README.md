
## Introduction
A simple PHP development environment for Docker.

This Docker setup includes PHP7-FPM , MySQL, Njinx and phpMyAdmin.

## Run the application
1. Put your code into the `code` file
2. Start your program: `./start.sh`
3. Open your browser:
    * localhost:8080 
    * localhost:8081    phpMyAdmin (username: root, password: root)
4. Stop and clear services: `./stop.sh`

## Check logs
Use `docker logs --help` to know more about that :)

e.g.
```
# Show the last 10 logs on the nginx service: 
$ docker logs --tail=10 nginx-container-name

# Follow log output: 
$ docker logs -f nginx-container-name
```
