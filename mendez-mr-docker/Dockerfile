FROM node:lts-alpine3.15

WORKDIR /app

COPY mendez-mr-webapp/package.json /app

RUN npm install
RUN npm audit fix --force

COPY mendez-mr-webapp/ .

CMD [ "node", "app.js" ]
