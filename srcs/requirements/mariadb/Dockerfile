FROM debian:buster

RUN apt-get update \
	&& apt-get install -y mariadb-server mariadb-client

EXPOSE 3306

#コンテナ実行時の入り口
ENTRYPOINT [ "executable" ] 



