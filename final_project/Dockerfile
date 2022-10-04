FROM node:lts-alpine3.15

WORKDIR /app

COPY ./final_project/frontend/package.json /app

RUN npm install
RUN npm audit fix --force

COPY ./final_project/frontend/ .

CMD [ "node", "app.js" ]