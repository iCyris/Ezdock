
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

## Issue
1. Nginx - If `access.log` and `error.log` are empty, try to remove log files and reload nginx:

``` Bash
$ sudo rm -f /var/log/nginx/*
$ sudo nginx -s reload
```

