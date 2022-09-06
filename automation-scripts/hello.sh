#!/bin/bash
#
#

url=${1}
msg=${2}

curl -X POST -H 'Content-type: application/json' --data '{"text":"Hello, '${msg}'!"}' ${url}