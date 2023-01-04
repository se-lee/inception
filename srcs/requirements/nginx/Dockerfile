#base image
FROM debian:buster

#run commands
RUN apt-get update \
	&& apt-get install -y nginx openssl
	
COPY ./conf/nginx.conf /etc/nginx/sites-available/default

RUN openssl req -new -newkey rsa:4096 -days 365 -nodes -x509 -subj \
	"/C=FR/ST=Rhone/L=Lyon/O=42/CN=selee.42.fr/emailAddress=selee@student.42lyon.fr" \
	-keyout /path/selee.42.fr.key -out /path/selee.42.fr.crt

# opening the port
EXPOSE 9000

#コンテナ実行時の実行コマンド
CMD ["nginx", "-g", "daemon off;"]
