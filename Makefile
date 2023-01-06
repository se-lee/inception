NAME = inception

all:
	mkdir -p "/home/selee/data/db_volume"
	mkdir -p "/home/selee/data/wp_volume"
	docker-compose -f "./srcs/docker-compose.yml" up -d --build

stop:
	docker-compose -f srcs/docker-compose.yml down

clean:
	docker-compose -f "./srcs/docker-compose.yml" down --rmi all

fclean:
	docker-compose -f "./srcs/docker-compose.yml" down --rmi all -v
	docker system prune --volumes -af
	rm -rf /home/selee/data/db_volume
	rm -rf /home/selee/data/wp_volume
