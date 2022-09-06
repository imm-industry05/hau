#!/bin/bash
#
#

url='https://hooks.slack.com/services/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'
msg=${1}

curl -X POST -H 'Content-type: application/json' --data '{"text":"Hello, '${msg}'!"}' ${url}