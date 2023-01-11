# base image
FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y

RUN apt-get install -y nginx openssl

# copy the file to the container
COPY /config/html.conf /etc/nginx/sites-available/default

RUN mkdir -p /etc/certificate \
	&& openssl req -new -newkey rsa:4096 -days 365 -nodes -x509 \ 
	-subj "/C=FR/ST=Rhone/L=Lyon/O=42/CN=selee.42.fr/emailAddress=selee@student.42lyon.fr" \
	-keyout /etc/certificate/selee.42.fr.key \
	-out /etc/certificate/selee.42.fr.crt

# コンテナ実行時の実行コマンド
CMD ["nginx", "-g", "daemon off;"]
# CMD ["sleep", "infinity"]
