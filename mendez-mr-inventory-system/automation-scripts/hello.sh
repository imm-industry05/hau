#!/bin/bash
#
#

url=${1}
msg=${2}

# curl -X POST -H 'Content-type: application/json' --data '{"text":"Hello, '${msg}'!"}' ${url}

webserver() {
    docker ps -a | grep node-inventory-app
}

# webapp() {

# }

# db() {

# }

webserver