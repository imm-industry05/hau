FROM node:lts-alpine3.15

WORKDIR /app

COPY webapp/package.json /app

RUN npm install

COPY webapp/ .

CMD [ "node", "app.js" ]

