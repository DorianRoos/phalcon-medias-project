FROM nginx:latest

RUN apt-get update
RUN apt-get install vim -y

COPY ./conf/api.template /etc/nginx/conf.d/api.template
COPY ./conf/nginx.conf /etc/nginx/nginx.conf