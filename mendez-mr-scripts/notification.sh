#!/bin/bash
#
#

runningContainers() {
    noContainers=`docker ps -q | wc -l`
    echo ${noContainers}
}

containersInfo() {
    Containers=`docker ps --format '{{.Names}}'`
    Uptime=$(cat uptime.tmp) 
    rm -rf info.tmp
    # echo -e "================= Containers ========================"
    for c in ${Containers}
        do
            Status=`docker ps --format "{{.Names}} {{.Status}}"  | grep ${c}`
            echo -e   "Container ${Status}" >> info.tmp
        done
    # echo -e "==============================================================="
}

getUrls() {
    conf=`ls ../mendez-mr-nginx-conf | grep  conf | cut -d'.' -f1,2,3`
    urls=`echo -e "${conf}"`
    # echo -e "=========================== URLS =============================="
    for u in ${urls}
        do
            echo -e "${u}"
            curl -X POST -H 'Content-type: application/json' --data '{"text": "Urls: '${u}'"}'  https://hooks.slack.com/services/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
        done
    # echo -e "==============================================================="
}

sendToSlack() {
        containersInfo
        getUrls >> info.tmp

        # msg=$(cat info.tmp)
        # echo "${msg}"
        runningContainers > runCon.tmp
        urls=$(cat info.tmp)
        runCon=$(cat runCon.tmp)
        echo $urls $runCon
    curl -X POST -H 'Content-type: application/json' --data '{"text": "Sample: Running containers '${runCon}'"}'  https://hooks.slack.com/services/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
    
}

# containersInfo > info.tmp
# getUrls >> info.tmp

# cat  info.tmp
sendToSlack

