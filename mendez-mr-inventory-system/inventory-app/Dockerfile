FROM node:lts-alpine3.15

WORKDIR /app

COPY webapp/package.json /app

RUN npm install
RUN npm audit fix --force

COPY webapp/ .

CMD [ "node", "app.js" ]